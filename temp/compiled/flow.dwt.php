<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_flow.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_flow.js')); ?> 
<?php if ($this->_var['step'] == "cart"): ?> 
 

  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
<div class="w cart">
<div class="cart-hd">
  <h2>我的购物车</h2>
  <span id="show2" class="fore"> </span> </div>
<div id="show">
  <div class="cart-inner">
    <div class="cart-thead clearfix">
      <div class="column t-checkbox form">
        <input id="toggle-checkboxes" type="checkbox" checked="">
        <label for="toggle-checkboxes">全选</label>
      </div>
      <div class="column t-goods"><?php echo $this->_var['lang']['goods_name']; ?></div>
      <div class="column t-shuxing"><?php echo $this->_var['lang']['goods_attr']; ?></div>
      <div class="column t-price"><?php echo $this->_var['lang']['market_prices']; ?></div>
      <div class="column t-price"><?php echo $this->_var['lang']['shop_prices']; ?></div>
      <div class="column t-quantity"><?php echo $this->_var['lang']['number']; ?></div>
      <div class="column t-price"><?php echo $this->_var['lang']['subtotal']; ?></div>
      <div class="column t-action"><?php echo $this->_var['lang']['handle']; ?></div>
    </div>
    <div id="product-list" class="cart-tbody"> 
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="item item_selected">
        <div class="item_form clearfix">
          <div class="cell p-checkbox">
            <input class="checkbox" type="checkbox" name="checkItem" checked="">
            <input type="hidden" name="rec_id" value="<?php echo $this->_var['goods']['rec_id']; ?>" />
          </div>
          <div class="cell p-goods"> 
            
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
            
            <div class="p-img"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a></div>
            <div class="p-name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> 
              <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
              <span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
              <?php endif; ?> 
              <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
              <span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
              <?php endif; ?> 
              </a> <span class="promise411" id="promise411_1094457453"></span> </div>
            <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
            <div class="p-name"><a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a></div>
            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_name']; ?> 
            <?php endif; ?> 
          </div>
          <div class="cell p-shuxing"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></div>
          <div class="cell p-price"><span class="price"><?php echo $this->_var['goods']['market_price']; ?></span></div>
          <div class="cell p-price"><span class="price"><?php echo $this->_var['goods']['goods_price']; ?></span></div>
          <div class="cell p-quantity"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <div class="quantity-form"> <a href="javascript:void(0);" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" class="decrement">-</a>
              <input type="text" class="quantity-text" value="<?php echo $this->_var['goods']['goods_number']; ?>" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" >
              <a href="javascript:void(0);" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);" class="increment">+</a> </div>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
          </div>
          <div class="cell p-price"><span class="price" id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></span></div>
          <div class="cell p-remove"><a class="cart-remove" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';">删除</a> <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?> 
            <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="cart-remove"><?php echo $this->_var['lang']['drop_to_collect']; ?></a> 
            <?php endif; ?> 
          </div>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <div class="cart-toolbar clearfix">
      <div class="control fl"> <span class="delete"><b></b><a href="javascript:void(0);" id="remove-batch">删除选中的商品</a></span> </div>
      <div class="total fr">
        <p><span id="totalSkuPrice"><?php echo $this->_var['total']['goods_price']; ?></span>总计：</p>
        <p><span id="totalRePrice">- <?php echo $this->_var['total']['saving']; ?></span>节省：</p>
      </div>
      <div class="amout fr"><span id="selectedCount"><?php echo $this->_var['total']['goods_count']; ?></span> 件商品</div>
    </div>
    <div class="cart-total clearfix">
      <div class="control fl clearfix"> </div>
      <div class="total fr"><span id="finalPrice"><?php echo $this->_var['total']['goods_price']; ?></span>总计（不含运费）：</div>
    </div>
  </div>
  <div class="cart-button clearfix"> <a class="btn continue" href="./index.php" id="continue"><span class="btn-text">继续购物</span></a> <a class="checkout" href="flow.php?step=checkout" id="toSettlement">去结算<b></b></a> </div>
  <?php if ($_SESSION['user_id'] > 0): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
  <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script> 
  <?php endif; ?> 
</div>
 <?php if ($this->_var['collection_goods']): ?>

    
    <div id="c-tabs" class="w w1">
  <div class="m plist2">
    <div class="cm fore1 curr" id="recommend-products">
      <div class="cmt">
        <h3><i></i><?php echo $this->_var['lang']['label_collection']; ?></h3>
      </div>
      <div class="cmc flow_collection" id="some-buy" >

        <div class="bd">
          <ul class="clearfix">
          <?php $_from = $this->_var['collection_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <li>
              <div class="p-img"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img width="130" height="130" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a></div>
              <div class="p-name"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
              <div class="p-price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></div>
              <div class="p-btn" sty><a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn"><span class="btn-icon"></span><span class="btn-text">加入购物车</span></a></div>
            </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        <div id="recommend-left" class="prev"></div>
        <div id="recommend-rigth" class="next"></div>

      </div>
      
    </div>
  </div>
</div>
  <?php endif; ?>
<?php if ($this->_var['fittings_list']): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
<div id="c-tabs" class="w w1">
  <div class="m plist2">
    <div class="cm fore1 curr" id="recommend-products">
      <div class="cmt">
        <h3><i></i><?php echo $this->_var['lang']['goods_fittings']; ?></h3>
      </div>
      <div class="cmc flow_fittings" id="some-buy" >
     <form action="flow.php" method="post">
        <div class="bd">
          <ul class="clearfix">
          <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>
            <li>
              <div class="p-img"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>"><img width="130" height="130" src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>"></a></div>
              <div class="p-name"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a></div>
              <div class="p-price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></div>
              <div class="p-btn"><a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)" class="btn"><span class="btn-icon"></span><span class="btn-text">加入购物车</span></a></div>
            </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        <div id="recommend-left" class="prev"></div>
        <div id="recommend-rigth" class="next"></div>
 </form>
      </div>
      
    </div>
  </div>
</div>
<?php endif; ?> 

<?php endif; ?>


<div class="flow_warp w">

 <?php if ($this->_var['step'] == "consignee"): ?>
        
        <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
        <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
        
        <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>

        <?php if ($this->_var['step'] == "checkout"): ?>
        
      <div class="flowBox_cart">
       
 <h6><span>确认订单信息页面</span></h6>
        <div class="flowBox_in">
        
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
        <div class="flowBox">
         <h6><span><?php echo $this->_var['lang']['goods_list']; ?></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
              <?php if ($this->_var['show_marketprice']): ?>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['market_prices']; ?></th>
              <?php endif; ?>
              <th bgcolor="#ffffff"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['number']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['subtotal']; ?></th>
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr>
              <td bgcolor="#ffffff">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
            <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php else: ?>
          <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?>
          <?php endif; ?>
          <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
              </td>
              <td bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
              <?php if ($this->_var['show_marketprice']): ?>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_market_price']; ?></td>
              <?php endif; ?>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['goods_number']; ?></td>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php if (! $this->_var['gb_deposit']): ?>
            <tr>
              <td bgcolor="#ffffff" colspan="7">
              <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br /><?php endif; ?>
              <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?>
              </td>
            </tr>
            <?php endif; ?>
          </table>
      </div>
      <div class="blank"></div>
      <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span><a href="flow.php?step=consignee" class="f6"><?php echo $this->_var['lang']['modify']; ?></a></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['email']); ?></td>
            </tr>
            <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
            <tr>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo $this->_var['consignee']['tel']; ?> </td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></td>
            </tr>
             <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
            <tr>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?> </td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?></td>
            </tr>
            <?php endif; ?>
          </table>
      </div>
     <div class="blank"></div>
    <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['shipping_method']; ?></span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
            <tr>
              <th bgcolor="#ffffff" width="5%">&nbsp;</th>
              <th bgcolor="#ffffff" width="25%"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?></th>
              <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['fee']; ?></th>
              <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['insure_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" />
              </td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['shipping']['shipping_name']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['format_shipping_fee']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['free_money']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
                <?php echo $this->_var['lang']['need_insure']; ?> </label></td>
            </tr>
          </table>
    </div>
    <div class="blank"></div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>
    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['payment_method']; ?></span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
            <tr>
              <th width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?></th>
              <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['pay_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
            
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['payment']['pay_name']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
              <td align="right" bgcolor="#ffffff" valign="top"><?php echo $this->_var['payment']['format_pay_fee']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
    </div>
    <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <div class="blank"></div>
          <?php if ($this->_var['pack_list']): ?>
          <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
            <tr>
              <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" />
              </td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="center">
                  <?php if ($this->_var['pack']['pack_img']): ?>
                  <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
               </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
       </div>
             <div class="blank"></div>
          <?php endif; ?>

          <?php if ($this->_var['card_list']): ?>
          <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
            <tr>
              <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
              <th bgcolor="#ffffff" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#ffffff" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  />
              </td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
              <td valign="top" align="center" bgcolor="#ffffff">
                  <?php if ($this->_var['card']['card_img']): ?>
                  <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
              <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
            </tr>
          </table>
        </div>
                <div class="blank"></div>
        <?php endif; ?>

      <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['other_info']; ?></span></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <?php if ($this->_var['allow_use_surplus']): ?>
            <tr>
              <td width="20%" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
              <td bgcolor="#ffffff"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
              <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['allow_use_integral']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
              <td bgcolor="#ffffff"><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
              <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['allow_use_bonus']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
              <td bgcolor="#ffffff">
                <?php echo $this->_var['lang']['select_bonus']; ?>
                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>

                <?php echo $this->_var['lang']['input_bonus_no']; ?>
                <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
              </td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['inv_content_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
                <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
              </td>
              <td bgcolor="#ffffff">
                <?php if ($this->_var['inv_type_list']): ?>
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
                <?php endif; ?>
                <?php echo $this->_var['lang']['invoice_title']; ?>
                <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                <?php echo $this->_var['lang']['invoice_content']; ?>
              <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                </select></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
            </tr>
            <?php if ($this->_var['how_oos_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
              <td bgcolor="#ffffff"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                <label>
                <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                <?php echo $this->_var['how_oos_name']; ?></label>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </td>
            </tr>
            <?php endif; ?>
          </table>
    </div>
    <div class="blank"></div>
    <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['fee_total']; ?></span></h6>
          <?php echo $this->fetch('library/order_total.lbi'); ?>
           <div align="center" style="margin:8px auto;">
            <input type="image" src="themes/jingdong2014/images/bnt_subOrder.gif" />
            <input type="hidden" name="step" value="done" />
            </div>
    </div>
    </form>
     </div>
     <img style="float:left" src="themes/jingdong2014/images/flow_bottom.gif">
    </div>
        <?php endif; ?>

        <?php if ($this->_var['step'] == "done"): ?>
        
        <div class="flowBox" style="margin:30px auto 70px auto;">
         <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
          <table width="99%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
            <tr>
              <td align="center" bgcolor="#FFFFFF">
              <?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['total']['amount_formated']; ?></strong>
              </td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
            </tr>
            <?php if ($this->_var['pay_online']): ?>
            
            <tr>
              <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
            </tr>
            <?php endif; ?>
          </table>
          <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?>
          <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['step'] == "login"): ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
        
        <div class="flowBox">
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="50%" valign="top" bgcolor="#ffffff">
            <h6><span>用户登录：</span></h6>
            <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                <table width="90%" border="0" cellpadding="8" cellspacing="0" bgcolor="#B0D8FF" class="table">
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['username']; ?></strong></div></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="input_text1" id="username" /></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></div></td>
                    <td bgcolor="#ffffff"><input name="password" class="input_text1" type="password" /></td>
                  </tr>
                  <?php if ($this->_var['enabled_login_captcha']): ?>
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></div></td>
                    <td bgcolor="#ffffff"><input type="text" size="8" name="captcha" class="input_text2" />&nbsp;
                    <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer; height:38px; width:130px;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
            <td colspan="2"  bgcolor="#ffffff"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
                  <tr>
                    <td bgcolor="#ffffff" colspan="2" align="center"><a href="user.php?act=qpassword_name" class="f6"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f6"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" colspan="2"><div align="center">
                        <input type="submit" class="bnt_blue" name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" />
                        <?php if ($this->_var['anonymous_buy'] == 1): ?>
                        <input type="button" class="bnt_blue_2" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                        <?php endif; ?>
                        <input name="act" type="hidden" value="signin" />
                      </div></td>
                  </tr>
                </table>
              </form>

              </td>
            <td valign="top" bgcolor="#ffffff">
            <h6><span>用户注册：</span></h6>
            <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
               <table width="98%" border="0" cellpadding="8" cellspacing="0" bgcolor="#B0D8FF" class="table">
                  <tr>
                    <td bgcolor="#ffffff" align="right" width="25%"><strong><?php echo $this->_var['lang']['username']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="input_text1" id="username" onblur="is_registered(this.value);" /><br />
            <span id="username_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['email_address']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="email" type="text" class="input_text1" id="email" onblur="checkEmail(this.value);" /><br />
            <span id="email_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="password" class="input_text1" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" /><br />
            <span style="color:#FF0000" id="password_notice"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['confirm_password']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="confirm_password" class="input_text1" type="password" id="confirm_password" onblur="check_conform_password(this.value);" /><br />
            <span style="color:#FF0000" id="conform_password_notice"></span></td>
                  </tr>
                  <?php if ($this->_var['enabled_register_captcha']): ?>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></td>
                    <td bgcolor="#ffffff"><input type="text" size="8" name="captcha" class="input_text2" />&nbsp;
                    <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer; width:130px; height:38px;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                    <td colspan="2" bgcolor="#ffffff" align="center">
                        <input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
                        <input name="act" type="hidden" value="signup" />
                    </td>
                  </tr>
                </table>
              </form>
              </td>
          </tr>
          <?php if ($this->_var['need_rechoose_gift']): ?>
          <tr>
            <td colspan="2" align="center" style="border-top:1px #ccc solid; padding:5px; color:red;"><?php echo $this->_var['lang']['gift_remainder']; ?></td>
          </tr>
          <?php endif; ?>
        </table>
        </div>
        
        <?php endif; ?>
        </div>
        <?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
        
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
