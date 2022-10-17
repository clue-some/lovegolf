<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee8033637854_59130273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a36f69a44a63df373150916843baa928fd08ad2' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\layout\\header.tpl',
      1 => 1522455642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/top-bar.tpl' => 1,
    'file:layout/navbar.tpl' => 1,
  ),
),false)) {
function content_5bee8033637854_59130273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/top-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

	<div class="headerArea">
	
		<div class="logoArea">
		
			<p><a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/"><img src="/tracker/wl/lovegolf/images/im-love-golf-logo.png" height="100" width="538" alt="<?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
" /></a></p>
		
		</div>
		
		<div class="bannerArea">
		
			<div class="socialArea">
			
				<p><a href="http://www.facebook.com/pages/Love-Golf/117019258308726" target="_blank" class="rl_facebook" title="Become a fan on Facebook"><span class="displace">Become a fan on Facebook</span></a><a href="http://www.twitter.com/we_lovegolf" target="_blank" class="rl_twitter" title="Follow us on Twitter"><span class="displace">Follow us on Twitter</span></a></p>
			
				<div class="floatEnder"></div>
			
			</div>
			
			<div class="basketArea<?php if ($_smarty_tpl->tpl_vars['basket']->value['items']) {?> hasItems<?php }?>">
			
			</div>
		
		</div>
		
		<div class="floatEnder"></div>
	
	</div>
	
	<div class="navBarHolder">
	
		<?php $_smarty_tpl->_subTemplateRender("file:layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	</div>
	
	<div class="bodyArea">
	<?php }
}
