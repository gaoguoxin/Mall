<div id="slide" class="m">

	
  <ul class="slide-items slide-items-w">
    
    <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_00390600_1409795206');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_00390600_1409795206']):
?>
    

    
    <li> <a href="<?php echo $this->_var['index_ad_0_00390600_1409795206']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_00390600_1409795206']['src']; ?>" width="670" height="240"></a> </li>

    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
  
  <ul class="slide-items slide-items-s">
    
    <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_00411300_1409795206');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_00411300_1409795206']):
?>
    
   
    <li> <a href="<?php echo $this->_var['index_ad_0_00411300_1409795206']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_00411300_1409795206']['src']; ?>" width="550" height="240"></a> </li>
 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
   <div class="slide-controls slide-controls-w">  <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_00430700_1409795206');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_00430700_1409795206']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
   
  <div class="slide-controls slide-controls-s">  <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_00457800_1409795206');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_00457800_1409795206']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
