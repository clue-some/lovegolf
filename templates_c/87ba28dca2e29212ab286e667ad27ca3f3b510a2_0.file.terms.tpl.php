<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-31 00:34:30
  from 'c:\vhosts\lovegolf\templates\terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abed796616c82_34730120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ba28dca2e29212ab286e667ad27ca3f3b510a2' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\terms.tpl',
      1 => 1403645990,
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
    'file:modules/terms.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5abed796616c82_34730120 (Smarty_Internal_Template $_smarty_tpl) {
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
			
				<?php $_smarty_tpl->_subTemplateRender("file:modules/terms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>
  
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender('file:html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
