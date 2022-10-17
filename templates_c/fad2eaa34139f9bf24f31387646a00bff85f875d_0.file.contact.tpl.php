<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-31 00:17:46
  from 'c:\vhosts\lovegolf\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abed3aa70f228_75616701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad2eaa34139f9bf24f31387646a00bff85f875d' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\contact.tpl',
      1 => 1403645812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:modules/contact.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5abed3aa70f228_75616701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
<?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="fullMainArea">
			
			<?php $_smarty_tpl->_subTemplateRender("file:modules/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
		</div>
  
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender('file:html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
