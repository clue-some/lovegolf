<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 22:57:51
  from 'c:\vhosts\lovegolf\templates\boxes\blog-latest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec0efbf8028_15645782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2683f3034986667020fdcdcb4bba0dda8cff382b' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\boxes\\blog-latest.tpl',
      1 => 1403646458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abec0efbf8028_15645782 (Smarty_Internal_Template $_smarty_tpl) {
?>			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>From the Love Golf Blog</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<ul id="catMenu">
					
						<?php
$__section_item_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_item']) ? $_smarty_tpl->tpl_vars['__smarty_section_item'] : false;
$__section_item_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['blogfeed']->value['items']) ? count($_loop) : max(0, (int) $_loop));
$__section_item_1_total = min(($__section_item_1_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_1_total !== 0) {
for ($__section_item_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_1_iteration <= $__section_item_1_total; $__section_item_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['title'];?>
</a></li>
						<?php
}
}
if ($__section_item_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_item'] = $__section_item_1_saved;
}
?>

					</ul>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div><?php }
}
