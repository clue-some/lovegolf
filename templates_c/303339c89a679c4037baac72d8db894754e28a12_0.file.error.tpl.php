<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:20:46
  from 'c:\vhosts\lovegolf\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7dde4c49d6_13303658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303339c89a679c4037baac72d8db894754e28a12' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\error.tpl',
      1 => 1403645884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:boxes/mini-profile.tpl' => 1,
    'file:boxes/login.tpl' => 1,
    'file:boxes/statistics.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5bee7dde4c49d6_13303658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
<?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="leftArea">
					
			<?php if ($_smarty_tpl->tpl_vars['currentuser']->value['loggedin']) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:boxes/mini-profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("file:boxes/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }?>
			
			<?php $_smarty_tpl->_subTemplateRender("file:boxes/statistics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
		</div>
		
		<div class="mainArea">

			<div class="mainAreaContent">

				<h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
				<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>

			</div>
		
		</div>

<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender('file:html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
