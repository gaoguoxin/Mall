<?php

/**
 * 经销商批发订货页面
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');

/* 未登录处理 */
if (empty($_SESSION['user_id']))
{
	ecs_header("Location: user.php?back_url=pifa.php\n");
	exit;
}

/*检查是否是经销商*/
if ($_SESSION['user_rank'] != 4){
	echo "<script>alert('您还不是经销商，不能进入经销商订货系统！');window.close();</script>";
	exit;
}

/* 获得请求的分类 ID */
if (isset($_REQUEST['id']))
{
    $cat_id = intval($_REQUEST['id']);
}

$page = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
$size = 50;
$sort = 'sort_order';
$order = 'desc';
/* 页面的缓存ID */
$cache_id = sprintf('%X', crc32($cat_id . '-' . $_SESSION['user_rank'] . '-' . $_CFG['lang']));
if (!$smarty->is_cached('pifa.dwt', $cache_id))
{
	assign_template();
	
	//一级分类
	$sql = "select * from " . $ecs->table('category') . " WHERE parent_id = 0 order by sort_order desc";
	$cate_list = $GLOBALS['db']->getAll($sql);
	$smarty->assign('cate_list',      $cate_list);
	
	$smarty->assign('helps',           get_shop_help());       // 网店帮助
	
	$children = get_children($cat_id);
	
	$count = get_cagtegory_goods_count($children);
	$max_page = ($count> 0) ? ceil($count / $size) : 1;
	if ($page > $max_page)
    {
        $page = $max_page;
    }
	$goodslist = category_get_goods($children, $size, $page, $sort, $order);
	$smarty->assign('goods_list', $goodslist);
	$smarty->assign('cat_id', $cat_id);
	assign_pager('pifa', $cat_id, $count, $size, $sort, $order, $page); // 分页
}

$smarty->display('pifa.dwt', $cache_id);


/**
 * 获得分类下的商品总数
 *
 * @access  public
 * @param   string     $cat_id
 * @return  integer
 */
function get_cagtegory_goods_count($children)
{
    $where  = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';

    /* 返回商品总数 */
    return $GLOBALS['db']->getOne('SELECT COUNT(*) FROM ' . $GLOBALS['ecs']->table('goods') . " AS g WHERE $where");
}


/**
 * 获得分类下的商品
 *
 * @access  public
 * @param   string  $children
 * @return  array
 */
function category_get_goods($children, $size, $page, $sort, $order)
{

    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
            "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';



    /* 获得商品列表 */
    $sql = 'SELECT g.goods_id,g.goods_sn, g.goods_name, g.goods_name_style, g.market_price, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
                'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
            "WHERE $where ORDER BY $sort $order";
			
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($promote_price != 0)
        {
            $watermark_img = "watermark_promote_small";
        }
        elseif ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new_small";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best_small";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot_small';
        }

        if ($watermark_img != '')
        {
            $arr[$row['goods_id']]['watermark_img'] =  $watermark_img;
        }

        $arr[$row['goods_id']]['goods_id']         = $row['goods_id'];
		$arr[$row['goods_id']]['goods_sn']         = $row['goods_sn'];
        $arr[$row['goods_id']]['goods_name']       = $row['goods_name'];
        $arr[$row['goods_id']]['name']             = $row['goods_name'];
        $arr[$row['goods_id']]['goods_brief']      = $row['goods_brief'];
        $arr[$row['goods_id']]['goods_style_name'] = add_style($row['goods_name'],$row['goods_name_style']);
        $arr[$row['goods_id']]['market_price']     = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']       = price_format($row['shop_price']);
        $arr[$row['goods_id']]['type']             = $row['goods_type'];
        $arr[$row['goods_id']]['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '';
        $arr[$row['goods_id']]['goods_thumb']      = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']        = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['url']              = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
    }

    return $arr;
}