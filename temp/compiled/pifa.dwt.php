<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title>经销商订货</title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="/js/pifa.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
<div class="blank"></div>
<div id="ur_here">
	当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="pifa.php">经销商订货</a> 
</div>
</div>

<div class="blank"></div>

<div class="block">
<div id="content" class="fixed">
    <div class="price">
        <h2>订货商品列表</h2>
 <div class="priceContent fixed">
            <div class="priceTOP fixed">
            	<ul>
                    <li><select id="selectcat" onchange="fun_select_cat()">
						<option value="0">请选择</option>
						<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
		                <option value="<?php echo $this->_var['cat']['cat_id']; ?>" <?php if ($this->_var['cat']['cat_id'] == $this->_var['cat_id']): ?>selected="selected"<?php endif; ?>><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?></option>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
		                </select>
					</li>
                </ul>
            </div>
            <div class="clear"></div>    
        <table width="200" border="0" cellspacing="1" class="priceTable">
          <tbody><tr>
            <th width="243">商品名称</th>
            <th width="131">商品货号</th>
            <th width="92">市场价</th>
            <th width="103">经销商订货价</th>
            <th width="235">操作</th>
          </tr>
		  <?php if ($this->_var['goods_list']): ?>
			  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'good');$this->_foreach['good'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['good']['total'] > 0):
    foreach ($_from AS $this->_var['good']):
        $this->_foreach['good']['iteration']++;
?>
				  <tr class="colorT">
				<td><a href="<?php echo $this->_var['good']['url']; ?>" target="_blank"><?php echo $this->_var['good']['goods_name']; ?></a></td>
				<td><?php echo $this->_var['good']['goods_sn']; ?></td>
				<td><?php echo $this->_var['good']['market_price']; ?></td>
				<td class="priceTD"><?php echo $this->_var['good']['shop_price']; ?></td>
				<td><div><a class="reduce" href="javascript:void(0)" onclick="fun_jian(5)">-</a>
					<input type="text" id="nber_5" onblur="checkModify(this)" value="1" class="number">
					<a class="add" href="javascript:void(0)" onclick="fun_jia(5)">+</a></div>
					<a name="Submit" href="javascript:addToCart(5,5)" class="btnS btnA">购买</a>
					<a name="Submit" class="btnM btnA" href="<?php echo $this->_var['good']['url']; ?>" target="_blank">查看详情</a></td>
			  </tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php else: ?>
			<tr><td colspan="5">暂无数据</td></tr>
		<?php endif; ?>
      </tbody></table>
        
         <?php echo $this->fetch('library/pages.lbi'); ?>
            
        </div>
    </div>
</div>
</div>






<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>  
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
function fun_select_cat(){
	var obj=document.getElementById('selectcat');
	var index=obj.selectedIndex;     
	var val = obj.options[index].value;
	window.location.href="pifa.php?id="+val;
  }
  
  



</script>
</body>
</html>