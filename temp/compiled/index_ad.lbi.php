
<div id="slideBox" class="slideBox">
  <div class="hd ">
    <ul>
      <!--<li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
      <li>6</li>-->
    </ul>
  </div>
  <div class="bd">
    <ul>
      <!--<li class="li_1" >
        <div class="banner_main_con"> <a href="http://www.txd168.com/goods.php?id=8496" target="_blank" class="main_banner_a"></a></div>
      </li>-->
	  <?php if ($this->_var['show_ad']['2']): ?>
      <li class="li_2" style="background:url('<?php echo $this->_var['show_ad']['2']['img']; ?>')">
	  <a href="<?php echo $this->_var['show_ad']['2']['url']; ?>" target="_blank" class="main_banner_a"><div class="banner_main_con"> 
          </div></a>
		</li>
	  <?php endif; ?>
      <!--<li class="li_3" >
	 <div class="banner_main_con"> <a href="http://o2o.txd168.com/goods.php?id=8495" target="_blank" class="main_banner_a"></a>    
        </div>
	  </li>  -->  
      <!--  <li class="li_4" >
	 <div class="banner_main_con"> <a href="#" target="_blank" class="main_banner_a"></a></div>    
	  </li>
      <li class="li_5" >
	 <div class="banner_main_con"> <a href="#" target="_blank" class="main_banner_a"></a>  </div>    
	  </li>
       <li class="li_6" >
	 <div class="banner_main_con"> <a href="#" target="_blank" class="main_banner_a"></a></div>    
	  </li>-->
    
    </ul>
  </div>
</div>
<script type="text/javascript">
		
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,delayTime:700});
		
</script>
