<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['script_name'] == "category"): ?>
<div class="j_box">
  <div class="j_logo">精品推荐</div>
  <div class="j_boxcontent">
    <div class="j_skulist" id="cont">
      <div class="j_skulist_inner">
        <ul class="clearfix" id="list1">
          <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_81834100_1409795209');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_81834100_1409795209']):
?>
          <li>
            <div class="p_img"><a href="<?php echo $this->_var['goods_0_81834100_1409795209']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_81834100_1409795209']['thumb']; ?>"></a></div>
            <div class="p_name"><a href="<?php echo $this->_var['goods_0_81834100_1409795209']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_81834100_1409795209']['short_style_name']; ?></a></div>
            <div class="p_price"> 
              <?php if ($this->_var['goods_0_81834100_1409795209']['promote_price'] != ""): ?> 
              <span class="tag_content"><?php echo $this->_var['goods_0_81834100_1409795209']['promote_price']; ?></span> 
              <?php else: ?> 
              <span class="tag_content"><?php echo $this->_var['goods_0_81834100_1409795209']['shop_price']; ?></span> 
              <?php endif; ?> 
            </div>
            <div class="p_promo"><span id="promInfo_1211884059" style="display:none"></span></div>
            <div class="clr"></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="clr"> </div>
</div>
<?php endif; ?> 
<?php endif; ?> 
