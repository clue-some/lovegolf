<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee80332e2655_15161133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75eeecc5239039d03f3acdebaeac3171983fc687' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\index.tpl',
      1 => 1403645820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:modules/hp-flash.tpl' => 1,
    'file:modules/hp-other-boxes.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5bee80332e2655_15161133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
<?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<div class="fullMainArea">

			<?php $_smarty_tpl->_subTemplateRender("file:modules/hp-flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<?php $_smarty_tpl->_subTemplateRender("file:modules/hp-other-boxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		 
		</div>
  
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender('file:html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
