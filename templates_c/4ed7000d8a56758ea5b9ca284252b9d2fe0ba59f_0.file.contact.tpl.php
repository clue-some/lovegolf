<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-31 00:17:46
  from 'c:\vhosts\lovegolf\templates\modules\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abed3aaa9d574_37198093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed7000d8a56758ea5b9ca284252b9d2fe0ba59f' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\contact.tpl',
      1 => 1403646460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abed3aaa9d574_37198093 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Your comments have been sent</h1>
					<p><span>Thank you for contacting <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
. Your comments have been passed to the relevant department and if necessary we'll contact your shortly.</span></p>
					<p>&nbsp;</p>
					<p><span><a href="/tracker/">Click here</a> to return to the homepage</span></p>
				
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
				inputreplace('#comments', "Tell us what you're thinking...");
			});
			
			
			<?php echo '</script'; ?>
>

			<div class="loginRegisterHolder">
				
				<form action="/contact/" method="post">
				
					<input type="hidden" name="docontact" value="1" />

					<div class="loginBoxArea" id="stdForm">
					
						<h1>Get in contact with us:</h1>
						
						<?php if ($_smarty_tpl->tpl_vars['contacterror']->value) {?><p class="error"><span><?php echo $_smarty_tpl->tpl_vars['contacterror']->value;?>
</span></p><?php }?>
						
						<p><span>We'd love to hear from you, whether it's a suggestion for a new feature, a bug that you've found or you simply want to tell us how great <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is! Just make sure you choose the right department from the dropdown menu. <strong>All fields are required.</strong></span></p>
						<p>&nbsp;</p>
						<p><strong>We respect your information and don't share it with anyone. Read more on our <a href="/tracker/help-support/security/">privacy</a> page.</strong></p>
						<p>&nbsp;</p>
						<p><input id="firstname" name="firstname" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['firstname']) {
echo htmlentities(stripslashes($_smarty_tpl->tpl_vars['post']->value['firstname']));
} else { ?>First name<?php }?>" class="field" tabindex="1" /></p>
						<p><input id="lastname" name="lastname" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['lastname']) {
echo htmlentities(stripslashes($_smarty_tpl->tpl_vars['post']->value['lastname']));
} else { ?>Last name<?php }?>" class="field" tabindex="2" /></p>
						<p><input id="emailaddress" name="emailaddress" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['emailaddress']) {
echo htmlentities(stripslashes($_smarty_tpl->tpl_vars['post']->value['emailaddress']));
} else { ?>Email address<?php }?>" class="field" tabindex="3" /></p>
						<p><input id="confirmemailaddress" name="confirmemailaddress" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['confirmemailaddress']) {
echo htmlentities(stripslashes($_smarty_tpl->tpl_vars['post']->value['confirmemailaddress']));
} else { ?>Confirm email address<?php }?>" class="field" tabindex="4" /></p>
					
					</div>
					
					<div class="registerBoxArea" id="stdForm2">
					
						<p><select name="department" size="1" tabindex="5">
							<option value="">Choose a department</option>
							<option value="General enquiry"<?php if ($_smarty_tpl->tpl_vars['post']->value['department'] == 'General enquiry') {?> selected="selected"<?php }?>>General enquiry</option>
							<option value="Help &amp; Support"<?php if ($_smarty_tpl->tpl_vars['post']->value['department'] == 'Help &amp; Support') {?> selected="selected"<?php }?>>Help &amp; Support</option>
							<option value="Feedback"<?php if ((!$_smarty_tpl->tpl_vars['post']->value['department'] && $_smarty_tpl->tpl_vars['mode']->value == 'feedback') || $_smarty_tpl->tpl_vars['post']->value['department'] == 'Feedback') {?> selected="selected"<?php }?>>Feedback</option>
							<option value="Suggestion"<?php if ((!$_smarty_tpl->tpl_vars['post']->value['department'] && $_smarty_tpl->tpl_vars['mode']->value == 'suggestion') || $_smarty_tpl->tpl_vars['post']->value['department'] == 'Suggestion') {?> selected="selected"<?php }?>>Suggestion</option>
							<option value="Shop enquiry"<?php if ($_smarty_tpl->tpl_vars['post']->value['department'] == 'Shop enquiry') {?> selected="selected"<?php }?>>Shop enquiry</option>
							<option value="Report scorecard"<?php if ((!$_smarty_tpl->tpl_vars['post']->value['department'] && $_smarty_tpl->tpl_vars['mode']->value == 'report-scorecard') || $_smarty_tpl->tpl_vars['post']->value['department'] == 'Report scorecard') {?> selected="selected"<?php }?>>Report scorecard</option>
							<option value="Bug Report"<?php if ((!$_smarty_tpl->tpl_vars['post']->value['department'] && $_smarty_tpl->tpl_vars['mode']->value == 'report-bug') || $_smarty_tpl->tpl_vars['post']->value['department'] == 'Bug Report') {?> selected="selected"<?php }?>>Bug report</option>
						</select></p>
						<p><textarea id="comments" name="comments" tabindex="6"><?php if ($_smarty_tpl->tpl_vars['post']->value['comments']) {
echo htmlentities(stripslashes($_smarty_tpl->tpl_vars['post']->value['comments']));
} else { ?>Tell us what you're thinking...<?php }?></textarea></p>
					
						<p>&nbsp;</p>
						<?php echo $_smarty_tpl->tpl_vars['recaptcha']->value;?>

	
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-send-comments.png" height="30" width="210" alt="Send comments" tabindex="7" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
				
					</div>
					
					<div class="floatEnder"></div>

				</form>
			
			</div>
			
			<?php }?>
					<?php }
}
