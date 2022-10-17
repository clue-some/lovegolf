<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\layout\top-bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee80336ee563_64223520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f1507fc86693f373cfeaca7a344d929a874740e' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\layout\\top-bar.tpl',
      1 => 1522450921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee80336ee563_64223520 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="topBar">

	<div class="topBarHolder">
	
		<div class="topBarContent">
			
			<p>
			<a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/">Home</a>
			<?php if ($_smarty_tpl->tpl_vars['currentuser']->value['loggedin']) {?>
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/logout/">Logout</a>
			<?php } else { ?> 
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/login/">Login</a> 
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/register/">Register</a> 
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/lost-password/">Lost password?</a> 
			<?php }?>
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/help-support/">Help & Support</a>
			| <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/contact/">Contact</a>
			<?php if ($_smarty_tpl->tpl_vars['currentuser']->value['admin']) {?>
			| <strong>Admin</strong>
			<?php }?>
			</p>
			
		</div>
		
	</div>

</div>
<?php }
}
