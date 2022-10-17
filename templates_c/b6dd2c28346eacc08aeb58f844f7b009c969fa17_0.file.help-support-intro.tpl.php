<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:21:11
  from 'c:\vhosts\lovegolf\templates\modules\help-support\help-support-intro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7df7151311_03224210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6dd2c28346eacc08aeb58f844f7b009c969fa17' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\help-support\\help-support-intro.tpl',
      1 => 1403786264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7df7151311_03224210 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Help & Support</h1>
<p>For help on how to use Love Golf's tracking system, visit our <a href="/blog/category/using-love-golf"><strong>dedicated help blog</strong></a>, or view the latest help posts below.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php if ($_smarty_tpl->tpl_vars['blogfeed']->value['items']) {?>
<h2>Last 5 help topics from the Love Golf blog...</h2>
<?php
$__section_item_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_item']) ? $_smarty_tpl->tpl_vars['__smarty_section_item'] : false;
$__section_item_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['blogfeed']->value['items']) ? count($_loop) : max(0, (int) $_loop));
$__section_item_1_total = min(($__section_item_1_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_1_total !== 0) {
for ($__section_item_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_1_iteration <= $__section_item_1_total; $__section_item_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
?>
<h2><a href="<?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['title'];?>
</a></h2>
<p><?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['description'];?>
</p>
<p>&nbsp;</p>
<?php
}
}
if ($__section_item_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_item'] = $__section_item_1_saved;
}
}
}
}
