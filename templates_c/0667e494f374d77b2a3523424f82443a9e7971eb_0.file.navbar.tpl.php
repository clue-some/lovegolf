<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\layout\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee803385bf60_03055632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0667e494f374d77b2a3523424f82443a9e7971eb' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\layout\\navbar.tpl',
      1 => 1403646456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee803385bf60_03055632 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="menuHolder">
			<!--[if lte IE 6]><span onmouseover='hideSelects();' onmouseout='showSelects();'><![endif]-->

			<ul id="menu">          
			
			<li class="track">
			    <a <?php if ($_smarty_tpl->tpl_vars['current']->value == "tracking") {?> class="norm selecta one"<?php } else { ?> class="norm first one"<?php }?> href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/tracking/">Track my performance</a>
			</li>
			
			<li class="clubs">
			    <a <?php if ($_smarty_tpl->tpl_vars['current']->value == "clubs") {?> class="norm select one"<?php } else { ?> class="norm one"<?php }?> href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/clubs/">Find a golf club</a> 
			</li>           
			
			<li class="clubhouse">
			    <a <?php if ($_smarty_tpl->tpl_vars['current']->value == "clubhouse") {?> class="norm select one"<?php } else { ?> class="norm one"<?php }?> href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/clubhouse/">Love Golf Clubhouse</a>
			</li>

			<li class="account">
			    <a <?php if ($_smarty_tpl->tpl_vars['current']->value == "my") {?> class="norm select one"<?php } else { ?> class="norm one"<?php }?> href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/my/">My account</a>
			</li>
			
			        
			</ul>
			
			<!--[if lte IE 6]></span><![endif]-->
			
			<div class="floatEnder"></div>

		</div>
		
		<div class="menuAccountArea">
			<?php if ($_smarty_tpl->tpl_vars['currentuser']->value['loggedin']) {?>
			<p>You are logged in as <span><?php echo $_smarty_tpl->tpl_vars['currentuser']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentuser']->value['surname'];?>
</span> &nbsp;|&nbsp; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/logout/">log-out</a></p>
			<?php } else { ?>
			<p><?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 is free to use - <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/register/">create account!</a></p>
			<?php }?>
		
		</div>
		
		<div class="floatEnder"></div><?php }
}
