<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title><?php echo $this->_var['page_title']; ?></title>
  <link href="themes/default/styles/master.css" rel="stylesheet" type="text/css" />
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
</head>
<body>

<div class="views">
  
  <div class="view view-main">
    
    <div class="navbar">
      <div class="navbar-inner">
        <div class="left">
          <a href="javascript:history.go(-1);" class="back link">
            <i class="icon icon-back"></i>
            <h1 class="left navbar-tit">会员注册</h1>
          </a>
        </div>
        <div class="right">
          <a href="index.php" class="link icon-only"><i class="icon icon-home"></i></a>
        </div>
      </div>
    </div>
    
    
    <div class="pages navbar-through toolbar-through">
      
      <div data-page="member-login" class="page">
        
        <div class="page-content">
          
          <div class="section">
		    <form class="list-block inset" action="user.php" method="post" name="formUser" onSubmit="return register();">
              <fieldset class="field">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-member"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input name="username" type="text"  id="username" placeholder="手机号码" />
                        </div>
                      </div>
                    </div>
                  </li>
                 <!--
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-email"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input name="email" type="text" id="email" placeholder="E-mail" />
                        </div>
                      </div>
                    </div>
                  </li>
                  -->
                  <!-- 2014-12-20 ccx 屏蔽
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-phone"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="number" id="J_PhoneTxt" placeholder="手机号码" />
                        </div>
                      </div>
                    </div>
                  </li>
                  -->
                  
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-key"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text"name="txd_user_code" value="" placeholder="短信验证码" />
                        </div>
                        <div class="item-after">
                        <input id="send_verify_code" name="send_verify_code" type="button"   value="获取验证码" onclick="javascript:send_message_2();">
                          <!--a href="javascript:void(0)"  style="border:1px solid #ccc ; height:28; padding:4px 1px 5px 5px; text-align:center; background-color:#f5f5f5" onclick="javascript:send_message_2();return false;">获取验证码</a-->
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-lock"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input id="password1" type="password" name="password" placeholder="密码" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-lock"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input id="password1" type="password" name="password" placeholder="密码" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-key"></i></div>
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text"name="captcha" value="" placeholder="验证码" />
                        </div>
                        <div class="item-after">
                          <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </fieldset>
              <fieldset class="field">
			    <input name="act" type="hidden" value="act_register" >
				<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
				<input name="Submit" type="submit"  class="button button-big button-fill color-red button-submit" value="注 册">
				<input name="agreement" type="checkbox" value="1" checked="checked" /> <?php echo $this->_var['lang']['agreement']; ?> 
              </fieldset>
            </form>
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>

</body>
</html>