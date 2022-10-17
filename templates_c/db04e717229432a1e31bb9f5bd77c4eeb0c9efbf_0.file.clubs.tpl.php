<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 23:12:58
  from 'c:\vhosts\lovegolf\templates\modules\clubs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abec47a6a42c9_59020272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db04e717229432a1e31bb9f5bd77c4eeb0c9efbf' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\clubs.tpl',
      1 => 1403646464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abec47a6a42c9_59020272 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'c:\\vhosts\\lovegolf\\libs\\smarty\\plugins\\function.cycle.php';
?>
			<?php echo '<script'; ?>
 type="text/javascript">
			

			$(function() {
				inputreplace('#courseFinderQuery', 'Enter club name, address or postcode');
			});
			
			
			<?php echo '</script'; ?>
>
			
			<div class="courseDirectoryArea">
				
				<h1>Golf Club Directory</h1>
				
				<h2>Find alphabetically:</h2>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
				  <tr class="scAlpha">
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/a/">A</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/b/">B</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/c/">C</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/d/">D</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/e/">E</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/f/">F</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/g/">G</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/h/">H</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/i/">I</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/j/">J</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/k/">K</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/l/">L</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/m/">M</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/n/">N</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/o/">O</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/p/">P</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/q/">Q</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/r/">R</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/s/">S</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/t/">T</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/u/">U</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/v/">V</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/w/">W</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/x/">X</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/y/">Y</a></p></td>
				    <td><p><a href="/clubs<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>/bookable<?php }?>/z/">Z</a></p></td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?>
				<p><a href="/clubs/"><input type="checkbox" name="checkbox" value="checkbox" checked="checked" disabled="disabled" /> Only show clubs with online tee booking</a></p>
				<?php } else { ?>
				<p><a href="/clubs/bookable/"><input type="checkbox" name="checkbox" value="checkbox" disabled="disabled" /> Only show clubs with online tee booking</a></p>
				<?php }?>
				<p>&nbsp;</p>
				<form id="courseSearch" action="/clubs/" method="get">
				<p><input class="field" id="courseFinderQuery" name="query" value="Enter club name, address or postcode"></p>
				<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-search.png" height="30" width="210" alt="Search" /></p>
				<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
				<?php if ($_smarty_tpl->tpl_vars['bookableonly']->value) {?><input id="courseSearchBookable" type="hidden" name="bookable" value="1" /><?php }?>
				</form>

				<div id="courseSearchResults">
					<?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
					<div class="courseNumberFloat">
						<?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>
						<p>Featured clubs</p>
						<?php } else { ?>
						<p><?php echo $_smarty_tpl->tpl_vars['results']->value;?>
 club<?php if ($_smarty_tpl->tpl_vars['results']->value != 1) {?>s<?php }?> found</p>
						<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['pages']->value[2]) {?>
					<div class="coursePageFloat">
						<p>
						<?php
$__section_page_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_page']) ? $_smarty_tpl->tpl_vars['__smarty_section_page'] : false;
$__section_page_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_1_total = $__section_page_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_1_total !== 0) {
for ($__section_page_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_1_iteration <= $__section_page_1_total; $__section_page_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['enabled']) {?>
							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'] > 1 && is_numeric($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['name'])) {?>|<?php }?>
							<a href="/clubs/<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'] > 1) {
echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'];?>
/<?php }?>">
							<?php }?>
							<?php echo htmlentities($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['name']);?>

							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['enabled']) {?>
							</a>
							<?php }?>
						<?php
}
}
if ($__section_page_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_page'] = $__section_page_1_saved;
}
?>
						</p>
					</div>
					<?php }?>
					<?php }?>
					<div class="floatEnder"></div>
					
	<?php if ($_smarty_tpl->tpl_vars['clubs']->value) {?>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
					  <tr class="scTop">
					    <td width="50%"><p>Club name</p></td>
					    <td width="20%"><p>Country</p></td>
					    <td width="20%"><p>County</p></td>
					    					  </tr>
	<?php
$__section_club_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_club']) ? $_smarty_tpl->tpl_vars['__smarty_section_club'] : false;
$__section_club_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['clubs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_club_2_total = $__section_club_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_club'] = new Smarty_Variable(array());
if ($__section_club_2_total !== 0) {
for ($__section_club_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index'] = 0; $__section_club_2_iteration <= $__section_club_2_total; $__section_club_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index']++){
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>"scEntry, scAlt"),$_smarty_tpl);?>
">
					    <td><p><a href="/club/<?php echo $_smarty_tpl->tpl_vars['clubs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_club']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index'] : null)]['urlname'];?>
/"><?php echo $_smarty_tpl->tpl_vars['clubs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_club']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index'] : null)]['name'];?>
</a></p></td>
					    <td><p><?php echo $_smarty_tpl->tpl_vars['clubs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_club']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index'] : null)]['countryname'];?>
</p></td>
					    <td><p><?php echo $_smarty_tpl->tpl_vars['clubs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_club']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_club']->value['index'] : null)]['county'];?>
</p></td>
					    					  </tr>
	<?php
}
}
if ($__section_club_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_club'] = $__section_club_2_saved;
}
?>	
					</table>

					<?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
					<div class="courseNumberFloat">
						<p><?php echo $_smarty_tpl->tpl_vars['results']->value;?>
 club<?php if ($_smarty_tpl->tpl_vars['results']->value != 1) {?>s<?php }?> found</p>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['pages']->value[2]) {?>
					<div class="coursePageFloat">
						<p>
						<?php
$__section_page_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_page']) ? $_smarty_tpl->tpl_vars['__smarty_section_page'] : false;
$__section_page_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_3_total = $__section_page_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_3_total !== 0) {
for ($__section_page_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_3_iteration <= $__section_page_3_total; $__section_page_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['enabled']) {?>
							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'] > 1 && is_numeric($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['name'])) {?>|<?php }?>
							<a href="/clubs/<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'] > 1) {
echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['number'];?>
/<?php }?>">
							<?php }?>
							<?php echo htmlentities($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['name']);?>

							<?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['enabled']) {?>
							</a>
							<?php }?>
						<?php
}
}
if ($__section_page_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_page'] = $__section_page_3_saved;
}
?>
						</p>
					</div>
					<?php }?>
					<?php }?>

					<div class="floatEnder"></div>
	<?php } else { ?>
					<p>No clubs found.</p>
	<?php }?>			
				</div><!-- /courseSearchResults -->
				
			</div>
<?php }
}
