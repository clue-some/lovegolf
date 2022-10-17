<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 22:57:52
  from 'c:\vhosts\lovegolf\templates\modules\tracking-home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec0f01362b2_18362643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce5cfed885c345a4e371f90fd6aa253b5370542f' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\tracking-home.tpl',
      1 => 1403646462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abec0f01362b2_18362643 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'c:\\vhosts\\lovegolf\\libs\\smarty\\plugins\\modifier.date_format.php';
echo '<script'; ?>
 type="text/javascript">
	
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	
<?php echo '</script'; ?>
>
<h1>Track my performance</h1>
<?php if ($_smarty_tpl->tpl_vars['currentuser']->value['loggedin']) {?>
<h1>Overview</h1>

						<div class="TMP">
							
							<div class="ovStatBox" id="fir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Rounds played</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php echo round((($tmp = @$_smarty_tpl->tpl_vars['useraverage']->value['numrounds'])===null||$tmp==='' ? 0 : $tmp),1);?>
</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<?php if ($_smarty_tpl->tpl_vars['useraverage']->value['numrounds']) {?><p>last round on<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userstatistics']->value['lastround']['date']);?>
</p><?php }?>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/view-scorecards/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="gir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Best round</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php echo round((($tmp = @$_smarty_tpl->tpl_vars['userbest']->value['totalscore'])===null||$tmp==='' ? 0 : $tmp),1);?>
</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<?php if ($_smarty_tpl->tpl_vars['userbest']->value['totalscore']) {?><p>played on<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userbest']->value['added']);?>
</p><?php }?>
									
									</div>
									
									<div class="ovSBLink">
									
										<?php if ($_smarty_tpl->tpl_vars['userbest']->value['totalscore']) {?><p><a href="/tracking/view-scorecards/#round_<?php echo $_smarty_tpl->tpl_vars['userbest']->value['roundid'];?>
">View &raquo;</a></p><?php }?>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="sand">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Average round</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php echo round((($tmp = @$_smarty_tpl->tpl_vars['useraverage']->value['totalscore'])===null||$tmp==='' ? 0 : $tmp),0);?>
</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<?php if ($_smarty_tpl->tpl_vars['useraverage']->value['totalscore']) {?><p>after <?php echo $_smarty_tpl->tpl_vars['useraverage']->value['numrounds'];?>
 rounds<br /><br /></p><?php }?>
									
									</div>
									
									<div class="ovSBLink">
									
										<?php if ($_smarty_tpl->tpl_vars['useraverage']->value['totalscore']) {?><p><a href="/tracking/view-scorecards/">View &raquo;</a></p><?php }?>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Handicap</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>?<?php } else {
echo number_format($_smarty_tpl->tpl_vars['currentuser']->value['handicap']);
}?></h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>Pending<?php } else {
echo round($_smarty_tpl->tpl_vars['currentuser']->value['handicap'],1);
}?><br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Lowest Hcp</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>?<?php } else {
echo round($_smarty_tpl->tpl_vars['handicap']->value['min'],1);
}?></h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>Pending<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['handicap']->value['mindate']);
}?><br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Highest Hcp</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>?<?php } else {
echo round($_smarty_tpl->tpl_vars['handicap']->value['max'],1);
}?></h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p><?php if ($_smarty_tpl->tpl_vars['currentuser']->value['handicappending']) {?>Pending<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['handicap']->value['maxdate']);
}?><br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<p>&nbsp;</p>
							
							<div class="floatEnder"></div>
							
						</div>

					<?php echo '<script'; ?>
 type="text/javascript">
					

						$(function() {
							chart('MSLine', '/tracker/statistics/lastrounds-total/', 'trackingChartOne', 710, 386);
							chart('Pie3D', '/tracker/statistics/lastrounds-frequency/', 'trackingChartThree', 450, 240);
							
							<?php if ($_smarty_tpl->tpl_vars['userstatistics']->value['lastround']['roundid']) {?>
							
							chart('MSLine','/tracker/statistics/round-holes/<?php echo $_smarty_tpl->tpl_vars['userstatistics']->value['lastround']['roundid'];?>
/','trackingChartTwo',920,500);
							chart('Pie3D', '/tracker/statistics/round-frequency/<?php echo $_smarty_tpl->tpl_vars['userstatistics']->value['lastround']['roundid'];?>
/', 'trackingChartFour', 450, 240);
							
							<?php }?>
							
						});
						
					
					<?php echo '</script'; ?>
>
					
<h1>Your last 10 rounds</h1>
<p>The chart below shows your number of strokes per round for the last 10 rounds played (at any course).</p>
<p>&nbsp;</p>
<div>
						
	<div id="trackingChartOne" style="width: 710px; height: 386px;">
			
		<p>Please wait...</p>
											
	</div>
						
</div>
<?php } else { ?>
<div class="howFloatArea">

	<div class="howFloatContent">
	
		<h1>How does <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 work?</h1>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no1.gif" height="38" width="38" alt="No.1" /></p>
		
		</div>
		
		<h2>Log-in & enter your scores</h2>
		<p>You can add extra data like FIR, GIR, putts and <a class='example5' href="/tracker/help-extra-stats.php">more!</a></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="floatEnder"></div>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no2.gif" height="38" width="38" alt="No.2" /></p>
		
		</div>
		
		<h2>Love Golf analyses your results</h2>
		<p>We work out your <a class='example5' href="/tracker/help-maintain-handicap.php">handicap</a> & <a class='example5' href="/tracker/help-points.php">stableford points</a> too!</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="floatEnder"></div>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no3.gif" height="38" width="38" alt="No.3" /></p>
		
		</div>
		
		<h2>Track & improve your game</h2>
		<p>You'll see your game like never before!</p>
		
		<div class="floatEnder"></div>
	
	</div>

</div>

<div class="howFloatArea">

	<div class="howFloatContent" id="right">
	
		<h1>How can I improve my game?</h1>
		
		<h2>Take 3 points off your handicap</h2>
		<p>By simply tracking you can improve! <a class='example5' href="/tracker/help-take-3-points.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<h2>Visualise with graphs & stats</h2>
		<p>See your scores & understand them better. <a class='example5' href="/tracker/help-visualise-graphs-stats.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<h2>Maintain your handicap</h2>
		<p>We'll track your handicap automatically. <a class='example5' href="/tracker/help-maintain-handicap.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
	
	</div>

</div>

<div class="floatEnder"></div>

<p><a href="/register/"><img style="padding-bottom: 6px;" src="/tracker/wl/lovegolf/images/but-register-tracking-free.gif" height="44" width="710" alt="Start tracking your game now! It's Free!" /></a></p>
<p><span style="font-size: 0.85em;">&laquo; Already have a Love Golf Account? Log-in on the left or <a href="/login/">click here</a></span></p>
<?php }?>

<!--
<?php if ($_smarty_tpl->tpl_vars['blogfeed']->value['items']) {?>
<h1>From the blog...</h1>
<?php
$__section_item_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_item']) ? $_smarty_tpl->tpl_vars['__smarty_section_item'] : false;
$__section_item_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['blogfeed']->value['items']) ? count($_loop) : max(0, (int) $_loop));
$__section_item_2_total = min(($__section_item_2_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_2_total !== 0) {
for ($__section_item_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_2_iteration <= $__section_item_2_total; $__section_item_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
?>
<h2><a href="<?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blogfeed']->value['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['title'];?>
</a></h2>
<?php
}
}
if ($__section_item_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_item'] = $__section_item_2_saved;
}
}?>
 -->
<?php }
}
