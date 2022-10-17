<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 23:03:42
  from 'c:\vhosts\lovegolf\templates\modules\lost-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec24e495930_75843060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f6b8a7c5a1aee598e20882c66922d94685656b' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\lost-password.tpl',
      1 => 1403646462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abec24e495930_75843060 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Thank you</h1>
					<p><span>An email has been sent to you asking you to confirm your password reset request.</span></p>
					<p>&nbsp;</p>
					<p><span><a href="/">Click here</a> to return to the homepage</span></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>
			
			<?php } else { ?>

			<?php echo '<script'; ?>
 type="text/javascript">
			

			$(function() {
				inputreplace('#lostpasswordemailaddress', 'Email address');
			});
			
			
			<?php echo '</script'; ?>
>
			
			<div class="loginRegisterHolder">
			
				<form action="" method="post">
				
				<div class="loginBoxArea">
				
					<h1>Lost password?</h1>
					<?php if ($_smarty_tpl->tpl_vars['lostpassworderror']->value) {?><p class="error"><span><?php echo $_smarty_tpl->tpl_vars['lostpassworderror']->value;?>
</span></p><?php }?>
					<p><span>Enter your email address below and we'll reset your password for you.</span></p>
					<p>&nbsp;</p>
					<p><input name="lostpasswordemailaddress" id="lostpasswordemailaddress" class="field" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['lostpasswordemailaddress']) {
echo $_smarty_tpl->tpl_vars['post']->value['lostpasswordemailaddress'];
} else { ?>Email address<?php }?>" /></p>
					<p>&nbsp;</p>
					<input type="hidden" name="dolostpassword" value="true" />
					<p><input class="lostPasswordButton" type="image" src="/tracker/wl/lovegolf/images/but-retrieve-password.png" height="30" width="210" alt="Retrieve password" /></p>
					<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
				</div>
				
				</form>
				
				<form action="/register/" method="post">
										
					<div class="registerBoxArea">
					
						<h1>Not already a member?</h1>
						<p>Unlike other golf tracking websites,<br /><?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is free. With your account you can<br />track, shop, socialise and search for courses,<br />all in one place.</p>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="6" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
			
				<div class="floatEnder"></div>
				
			</div>

			<?php }?>
			<?php }
}
