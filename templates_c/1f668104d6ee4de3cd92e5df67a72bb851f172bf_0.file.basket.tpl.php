<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 23:11:12
  from 'c:\vhosts\lovegolf\templates\boxes\basket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec410279751_43472316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f668104d6ee4de3cd92e5df67a72bb851f172bf' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\boxes\\basket.tpl',
      1 => 1403646458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abec410279751_43472316 (Smarty_Internal_Template $_smarty_tpl) {
?>
		
		<div class="basketContent" id="basketText">
			<p><?php if ($_smarty_tpl->tpl_vars['basket']->value['items']) {?><a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/shop/basket">View basket</a><?php } else { ?>Your basket is empty<?php }?></p>
			<p><strong>Items: <?php echo $_smarty_tpl->tpl_vars['basket']->value['items'];?>
  Total: &pound;<?php echo number_format($_smarty_tpl->tpl_vars['basket']->value['total'],2);?>
</strong></p>
		</div>
<?php }
}
