<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?>
<div id="shortcut-2013">
  <div class="w">
    <ul class="fl lh">
      <li class="fore1 ld"><b></b><a href="javascript:addToFavorite()" rel="nofollow">收藏京东</a></li>
    </ul>
    <ul class="fr lh">
      <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      <li class="fore2 ld"> <s></s> <a href="user.php?act=order_list">我的订单</a> </li>
      <li class="fore3 ld menu" id="app-jd"><s></s><i></i><span class="outline"></span><span class="blank"></span><a href="#" target="_blank">手机京东</a><b></b>
        <div class="dd lh">
          <div class="qr-info"></div>
          <div class="qr-item qr-jd-app">
            <div class="qr-img"><img id="app-qrcode-img" src="themes/jingdong2014/images/538557daNd249a428.png" width="76" height="76" alt="手机京东" src="themes/jingdong2014/images/blank.gif"></div>
            <div class="qr-ext"><strong>京东客户端</strong><a href="#" target="_blank" class="btn-app-apple"></a><a href="#" target="_blank" class="btn-app-android"></a></div>
          </div>
        </div>
      </li>
      <li class="fore4 ld menu" id="biz-service"> <s></s> <span class="outline"></span> <span class="blank"></span> 客户服务 <b></b>
        <div class="dd">
          <div><a href="#" target="_blank">帮助中心</a></div>
          <div><a href="#" target="_blank" rel="nofollow">售后服务</a></div>
          <div><a href="#" target="_blank" rel="nofollow">在线客服</a></div>
          <div><a href="#" target="_blank" rel="nofollow">投诉中心</a></div>
          <div><a href="#" target="_blank">客服邮箱</a></div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="w w1 header clearfix">
	<div id="logo"><a href="./index.php"><img src="themes/jingdong2014/images/logo.gif" title="返回<?php echo $this->_var['shop_name']; ?>首页" alt="返回<?php echo $this->_var['shop_name']; ?>首页"></a></div>
</div>