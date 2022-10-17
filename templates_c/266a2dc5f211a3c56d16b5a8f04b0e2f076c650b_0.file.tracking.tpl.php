<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 22:57:50
  from 'c:\vhosts\lovegolf\templates\tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec0eed5b461_14494462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266a2dc5f211a3c56d16b5a8f04b0e2f076c650b' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\tracking.tpl',
      1 => 1403645978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:boxes/mini-profile.tpl' => 1,
    'file:boxes/login.tpl' => 1,
    'file:boxes/blog-latest.tpl' => 1,
    'file:boxes/statistics.tpl' => 1,
    'file:modules/hp-tracker-content-boxes.tpl' => 2,
    'file:modules/tracking-home.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5abec0eed5b461_14494462 (Smarty_Internal_Template $_smarty_tpl) {
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
			
			<?php $_smarty_tpl->_subTemplateRender("file:boxes/blog-latest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<?php $_smarty_tpl->_subTemplateRender("file:boxes/statistics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		</div>
		
		<div class="mainArea">
		
			<?php $_smarty_tpl->_subTemplateRender("file:modules/hp-tracker-content-boxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<div class="mainAreaContent">
			
				<?php $_smarty_tpl->_subTemplateRender("file:modules/tracking-home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
			
			<?php $_smarty_tpl->_subTemplateRender("file:modules/hp-tracker-content-boxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
		</div>
  
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender('file:html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
