<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="ecmoban_benlai/favicon.ico" />
<link rel="icon" href="ecmoban_benlai/animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<style>
	.goodsItem{margin-left:33.5px;padding:10px 2px 15px 0;}
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block clearfix">
  <div class="AreaL"> <?php echo $this->fetch('library/category_tree_index.lbi'); ?> 

    
    
  </div>
  <div style="float:right; width:994px;"> <?php echo $this->fetch('library/index_ad.lbi'); ?> 
<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>
 </div>
  <div class="blank"></div>
  <div class="goodsBox_1"> 
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
 
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
 </div>
</div>

<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
