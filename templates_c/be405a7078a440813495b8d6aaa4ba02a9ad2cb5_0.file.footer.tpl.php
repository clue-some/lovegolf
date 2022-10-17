<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee8033c67e68_54177588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be405a7078a440813495b8d6aaa4ba02a9ad2cb5' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\layout\\footer.tpl',
      1 => 1522456089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee8033c67e68_54177588 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'c:\\vhosts\\lovegolf\\libs\\smarty\\plugins\\modifier.date_format.php';
?>		<div class="floatEnder"></div>
	
	</div>
	
	<div class="footerArea">
	
		<div class="footerContent">
		
			<p>&copy; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
</a> <?php echo smarty_modifier_date_format(time(),"%Y");?>
 &nbsp;|&nbsp; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/help-support/">Privacy</a> &nbsp;|&nbsp; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/terms/">Terms of Use</a> &nbsp;|&nbsp; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/contact/">Feedback</a> &nbsp;|&nbsp; <a href="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/report-bug/">Report a problem</a></p>
		
		</div>
	
	</div>
	
	<div class="footerCredit">
	
		<div class="footerContent" id="ftrCredit">
		
			<p>Love Golf was the trading name of Golf Card Plus Ltd. Registered in England & Wales no. 5411989. VAT registration no. 991 4097 89. Site now maintained on a non-commercial basis by <a href="https://cluesome.ltd">CLUESOME</a></p>
		
		</div>
	
	</div>

</div><?php }
}
