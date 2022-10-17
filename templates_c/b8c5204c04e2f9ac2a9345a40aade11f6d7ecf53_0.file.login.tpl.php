<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:20:46
  from 'c:\vhosts\lovegolf\templates\boxes\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7ddee4a1f3_59074934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c5204c04e2f9ac2a9345a40aade11f6d7ecf53' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\boxes\\login.tpl',
      1 => 1403646458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7ddee4a1f3_59074934 (Smarty_Internal_Template $_smarty_tpl) {
?>			<div class="leftAreaHolder">
			
				<div class="leftTitleBar" id="blue">
				
					<h1>Account log-in</h1>
					
				</div>
				
				<div class="leftBox">
					
					<form action="" method="post">
					<?php if ($_smarty_tpl->tpl_vars['loginerror']->value) {?>
					<p><?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>
</p>
					<p>&nbsp;</p>
					<?php }?>
					<p style="padding: 0px 0px 3px 0px; font-weight: bold;">Email Address:</p>
					<p><input name="loginemail" id="loginemail" type="text" class="field" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['loginemail'];?>
" /></p>
					<p style="padding: 0px 0px 3px 0px; font-weight: bold;">Password:</p>
					<p><input name="loginpassword" id="loginpassword" type="password" class="field" /></p>
					<div class="checkBoxFloat">
						<p><input name="loginremember" class="formCheck" type="checkbox" value="" /></p>
					</div>
					<p><span><span>Remember me!</span></span></p>
					<input type="hidden" name="dologin" value="true" />
					<p style="margin-bottom: 5px;"><input type="image" src="/tracker/wl/lovegolf/images/but-small-login.png" height="22" width="192" alt="Log-in" /></p>
					<p><span>Lost password? <a href="/lost-password/">Click Here</a></span></p>
					</form>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
						
				</div>
				
			</div>
			<?php }
}
