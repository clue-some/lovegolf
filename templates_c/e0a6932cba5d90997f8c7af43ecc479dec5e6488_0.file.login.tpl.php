<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:20:28
  from 'c:\vhosts\lovegolf\templates\modules\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7dccc1c2f6_59541944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a6932cba5d90997f8c7af43ecc479dec5e6488' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\login.tpl',
      1 => 1403646462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7dccc1c2f6_59541944 (Smarty_Internal_Template $_smarty_tpl) {
?>			
			<?php echo '<script'; ?>
 type="text/javascript">
			

			$(function() {
				inputreplace('#loginemail', 'Email Address');
			});
			
			
			<?php echo '</script'; ?>
>

			<div class="loginRegisterHolder">
		
				<form action="" method="post">
					
					<input type="hidden" name="dologin" value="1" />					
					
					<div class="loginBoxArea">
					
						<h1>Account log-in:</h1>
						
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Email Address:</p>
						<p><input id="loginemail" name="loginemail" type="text" class="field" tabindex="1" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['loginemail']) {
echo $_smarty_tpl->tpl_vars['post']->value['loginemail'];
} else { ?>Email Address<?php }?>" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Password:</p>
						<p><input id="loginpassword" name="loginpassword" type="password" class="field" tabindex="2" /></p>
						<div class="checkBoxFloat">
							<p><input id="loginremember" name="loginremember" class="formCheck" type="checkbox" tabindex="3" value="" /></p>
						</div>
						<p><label for="loginremember">Remember me on this computer</label></p>
						<p>&nbsp;</p>
						<?php if ($_smarty_tpl->tpl_vars['loginerror']->value) {?><p class="error"><span><?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>
</span></p><?php }?>
						<div class="lostPasswordFloat">
							<p>Lost password? <a href="/lost-password/">Click Here</a></p>
						</div>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-login-login-register.png" height="30" width="210" alt="Log-in" tabindex="4" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
				
				<form action="/register/" method="post">
										
					<div class="registerBoxArea">
					
						<h1>Create an account:</h1>
						<p>&nbsp;</p>
						<p style="font-size: 1.25em;">Unlike other golf tracking websites,<br /><?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is free. With your account you can<br />track, shop, socialise and search for golf clubs<br />near you, all in one place.</p>
						<p>&nbsp;</p>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="6" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
		
				<div class="floatEnder"></div>
				
				<?php if ($_smarty_tpl->tpl_vars['skiploginoption']->value) {?>
				
				<div class="shopLoginSkip">
				
					<div class="shopLoginSkipFloat" style="margin-right: 41px;">
					
						<p style="text-align: right;">If you'd prefer to shop without creating an account, skip straight to the checkout &raquo;&raquo;</p>
					
					</div>
					
					<div class="shopLoginSkipFloat" style="width: 210px;">
					
						<p><a href="https://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/shop/checkout.php"><img src="/tracker/wl/lovegolf/images/but-skip-to-checkout.png" height="30" width="210" alt="Skip to checkout &raquo;" /></a></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
					
					</div>
					
					<div class="floatEnder"></div>
				
				</div>
				
				<?php }?>
				
				<div class="safeSecureArea">
				
					<p><img src="/tracker/wl/lovegolf/images/im-safe-secure.png" height="62" width="294" alt="<?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is safe & secure" /></p>
					<p>&nbsp;</p>
				
				</div>
				
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>
<?php }
}
