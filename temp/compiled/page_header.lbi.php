<link href="themes/ecmoban_benlai/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block">     
    
        <div class="bookmail">
            <p>欢迎光临本站<font id="ECS_MEMBERZONE" style="display:block; float:left;"></font></p><div id="append_parent"></div>
     <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
     
     </font>
      </div>
      
      <div class="user_control">
    	<ul class="clearfix">
        <?php if ($this->_var['navigator_list']['top']): ?> 
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?> 
        <li class="hd_menu_tit" 
        
        
        
        
        
        <?php if (($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?> 
        style="background:none;" 
        <?php endif; ?> 
        > <a href="<?php echo $this->_var['nav']['url']; ?>" 
        
        
        
        
        
        <?php if ($this->_var['nav']['opennew'] == 1): ?> 
        target="_blank" 
        <?php endif; ?> 
        ><?php echo $this->_var['nav']['name']; ?></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
      
      
    </div>
</div>







<div class="clearfix"> 
    <div class="block header">
        <div class="top clearfix">
        <a href="index.php" class="logo"><img src="themes/ecmoban_benlai/images/logo.gif">  </a>
        <div class="head_r"> 
            <div class="top_search"> 
            <script type="text/javascript">
                
                <!--
                function checkSearchForm()
                {
                    if(document.getElementById('keyword').value)
                    {
                        return true;
                    }
                    else
                    {
                        alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                        return false;
                    }
                }
                -->
                
                </script>
              <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;">
              <div class="headSearch_input">
                 <input name="keywords" type="text" id="keyword" class="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"  />
                <input value="" id="seachbtn" type="submit" /> 
              </div>
            </form>
            <div class="vjia-suggest-container"><div class="vjia-suggest-content"></div>
                <ol>
                </ol>
            </div> 
            <div style="clear:both"></div> 
            <?php if ($this->_var['searchkeywords']): ?>
                <div class="search_tig">
                    <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                    <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" class="track"><?php echo $this->_var['val']; ?></a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>    
            <?php endif; ?>
            </div> 
        </div>
        <div class="sales_num">
            <div class="contact_way">
                <!--
                <div><a href="http://wpa.qq.com/msgrd?V=1&Uin=123456&Site=ECSHOP%E6%A8%A1%E6%9D%BF%E5%A0%82%EF%BC%88www.ecmoban.com%EF%BC%89%E4%B8%93%E4%B8%9AECSHOP%E6%A8%A1%E6%9D%BF%E5%88%B6%E4%BD%9C&Menu=yes" target="_blank">在线客服</a></div>-->
                <p class="sell_call">销售/客服 400-887-2060</p>
            </div>
            <div class="clearfix">
    	<div class="f_l my_benlai"><div class="position"><a href="user.php" class="a">个人中心</a></div>
        	<div class="second_benlai" style="display: none;">
            	<p><span>您好，请登录</span><a href="user.php"></a></p>
                
            </div>
        </div>
        
        <div class="f_r">
        	<div class="mini_cart clearfix">
                <a class="jiesuan" href="flow.php"><span id="ECS_CARTINFO">
                    购物车&nbsp;<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </span></a>
            </div>
        </div>
        
        
    </div>
         </div>
        
        </div>
    </div> 
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block main_menu"> 
<div class="menu">
  <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
<?php echo $this->_var['nav']['name']; ?>
 <span></span>
</a>
 
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div> 
</div>
</div>
 
<script type="text/javascript">
/*
	var jq=$.noConflict();
	jq(".user_control ul li.mymoney").hover(function(){
			jq(this).addClass("active");
			jq(this).find("div").show();
		},function(){
			jq(this).removeClass("active");
			jq(this).find("div").hide();
		});
*/
		
		var money=document.getElementById("mymoney");
		var cname=money.className;
		money.onmouseover=function(){
			this.className+=" active";
			this.children[0].style["display"]="block";
		}
		money.onmouseout=function(){
			this.className=cname;
			this.children[0].style["display"]="none";
		}
		
</script>
 

 

