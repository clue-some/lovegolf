<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:21:10
  from 'c:\vhosts\lovegolf\templates\boxes\statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee7df6e32106_34530464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5537a0f835b8e43193169ae5712f99fdada9f77d' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\boxes\\statistics.tpl',
      1 => 1403646458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7df6e32106_34530464 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'c:\\vhosts\\lovegolf\\libs\\smarty\\plugins\\modifier.truncate.php';
?>			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="green">
				
					<h1>Daily statistics</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<div class="leftBoxSub">
					
						<p>Rounds added today:</p>
						<p><span><span><?php echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['scorecardsadded']['today'],0);?>
</span> (<?php echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['scorecardsadded']['alltime'],0);?>
 so far)</span></p>
						
					</div>
					
					<div class="leftBoxSub">
					
						<p>Today's best round:</p>
						<p><span><span><?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['bestscore']['today']['score']) {
echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['bestscore']['today']['score'],0);
} else { ?>N/A<?php }?></span><?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['bestscore']['today']['username']) {?> [<?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['bestscore']['today']['firstname'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ogtstatistics']->value['bestscore']['today']['surname'],1,'');?>
]<?php }?></span></p>
						
					</div>
					
					<div class="leftBoxSub">
					
						<p>Today's average round:</p>
						<p><span><span><?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['averagescore']['today']) {
echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['averagescore']['today'],0);
} else { ?>N/A<?php }?></span> (<?php echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['averagescore']['alltime'],0);?>
 overall)</span></p>
						
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']) {?>
					<div class="leftBoxSub">
					
						<p>Today's most popular course:</p>
						<p>
							<span>
								<span>
									<?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']) {?><a href="/club/<?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['cluburlname'];?>
/course/<?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['courseurlname'];?>
/<?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['courseid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['name'];?>
</a><?php } else { ?>N/A<?php }?>
								</span>
								(<?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['clubname'];
if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['county']) {?>, <?php echo $_smarty_tpl->tpl_vars['ogtstatistics']->value['popularcourses']['today']['county'];?>
)<?php }?>
							</span>
						</p>
						
					</div>
					<?php }?>
					
					<div class="leftBoxSub">
					
						<p>Total number of site users:</p>
						<p><span><span><?php echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['users']['total']);?>
</span></span></p>
						
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['ogtstatistics']->value['users']['online']) {?>
					<div class="leftBoxSub" id="noBorder">
					
						<p>Number of users online now:</p>
						<p><span><span><?php echo number_format($_smarty_tpl->tpl_vars['ogtstatistics']->value['users']['online']);?>
</span></span></p>
						
					</div>
					<?php }?>
					
					<div class="leftBoxBase">
					
						<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
					</div>
				
				</div>
				
			</div><?php }
}
