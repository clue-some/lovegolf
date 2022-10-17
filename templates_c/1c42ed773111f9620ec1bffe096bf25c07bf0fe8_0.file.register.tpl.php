<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:20:32
  from 'c:\vhosts\lovegolf\templates\modules\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7dd0465351_35293746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c42ed773111f9620ec1bffe096bf25c07bf0fe8' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\register.tpl',
      1 => 1522456458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7dd0465351_35293746 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Thank you for registering with <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
</h1>
					<p><span>To complete your registration, please click on the link in the email we've just sent you.</span></p>
					<p>&nbsp;</p>
					<p><span>Remember to add lovegolf.co.uk to your email safe list to ensure receipt of all future mailings.</span></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>	
			
			<?php } else { ?>

			<?php echo '<script'; ?>
 type="text/javascript">
			
			
			$(function() {

				inputreplace('#firstname', 'First name');
				inputreplace('#lastname', 'Last name');
				inputreplace('#emailaddress', 'Email address');
				inputreplace('#confirmemailaddress', 'Confirm email address');
				inputreplace('#password', "Choose a password");
				
			});
			
			
			<?php echo '</script'; ?>
>
			
			<div class="loginRegisterHolder">
				
				<form action="/register/" method="post">
				
					<input type="hidden" name="doregister" value="1" />
				
					<div class="loginBoxArea" id="regForm" style="margin-top: 60px;">
					
						<h1>Register for your free account:</h1>

						<p><span>Fill in the simple form below and start using <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 today! All fields are required.</span></p>
						<p>&nbsp;</p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">First name:</p>
						<p><input id="firstname" name="firstname" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['firstname']) {
echo $_smarty_tpl->tpl_vars['post']->value['firstname'];
} else { ?>First name<?php }?>" class="field" tabindex="1" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Last name:</p>
						<p><input id="lastname" name="lastname" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['lastname']) {
echo $_smarty_tpl->tpl_vars['post']->value['lastname'];
} else { ?>Last name<?php }?>" class="field" tabindex="2" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Email address:</p>
						<p><input id="emailaddress" name="emailaddress" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['emailaddress']) {
echo $_smarty_tpl->tpl_vars['post']->value['emailaddress'];
} else { ?>Email address<?php }?>" class="field" tabindex="3" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Confirm email address:</p>
						<p><input id="confirmemailaddress" name="confirmemailaddress" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['confirmemailaddress']) {
echo $_smarty_tpl->tpl_vars['post']->value['confirmemailaddress'];
} else { ?>Confirm email address<?php }?>" class="field" tabindex="4" /></p>
						<p style="padding: 0px 0px 3px 10px;">We don't share your data with anyone. Read our <a href="/terms/">terms</a>.</p>
					
					</div>
					
					<div class="registerBoxArea" id="regForm" style="margin-top: 144px;">
					
						<p style="padding: 0px 0px 3px 10px; font-weight: bold; font-size: 0.7em;">Choose a password:</p>
						<p><input id="password" name="password" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['password']) {
echo $_smarty_tpl->tpl_vars['post']->value['password'];
} else { ?>Choose a password<?php }?>" class="field" tabindex="5" /></p>
						<div class="checkBoxFloat">
							<p><input id="newsletteroptin" name="newsletteroptin" class="formCheck" type="checkbox" value="1" tabindex="6" /></p>
						</div>
						<p><label for="newsletteroptin">Check this box if you would like to receive email newsletters from Love Golf</label></p>
						<p>&nbsp;</p>
						<?php if ($_smarty_tpl->tpl_vars['registrationerror']->value) {?><p class="error"><span><?php echo $_smarty_tpl->tpl_vars['registrationerror']->value;?>
</span></p><?php }?>
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="7" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						<p>&nbsp;</p>
						<p><img src="/tracker/wl/lovegolf/images/im-safe-secure.png" height="62" width="294" alt="<?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is safe & secure" /></p>
					
					</div>
				
				</form>
				
				<div class="floatEnder"></div>
				
			</div>
			
			<?php }?>
					<?php }
}
