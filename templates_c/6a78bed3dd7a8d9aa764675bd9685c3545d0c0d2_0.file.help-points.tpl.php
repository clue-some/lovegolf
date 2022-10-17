<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-09 01:00:45
  from 'c:\vhosts\lovegolf\templates\modules\help-support\help-points.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5aa1dcbd536067_09898312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a78bed3dd7a8d9aa764675bd9685c3545d0c0d2' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\help-support\\help-points.tpl',
      1 => 1403786264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa1dcbd536067_09898312 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="helpItemArea">

	<h1>Stableford points & Net score</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 automatically calculates your stableford points and net score every time you add a round.</p>
	<p>&nbsp;</p>
	<p>Below is an explanation of how it's done:</p>
	<p>&nbsp;</p>
	<h2>Stableford points:</h2>
	<p>To work out points, we need to know your handicap and the stroke index for each hole on the course.</p>
	<p>&nbsp;</p>
	<p>The stroke index refers to a holes difficulty, 1 being the hardest and 18 being the easiest.</p>
	<p>&nbsp;</p>
	<p>Extra shots are awarded per hole, based on the players' handicap.</p>
	<p>&nbsp;</p>
	<p>If a player has a handicap of 10, they would get 10 extra shots. These 10 shots are taken from the 10 most difficult holes (SI 1 to 10). No extra shots are awarded on holes with SI 11 to 18.</p>
	<p>&nbsp;</p>
	<p>If a player has a handicap of 24, they would get 18 extra shots, one on each hole, and 1 additional shot on the 6 hardest holes (SI 1 to 6). So 18 + 6 = 24, same as handicap.</p>
	<p>&nbsp;</p>
	<p>Points are scored depending on how many shots you made over or under the total shots allowed for that hole.</p>
	<p>&nbsp;</p>
	<table width="520" border="0" cellspacing="0" cellpadding="0" class="shipping">
      <tr class="scEntry">
        <td><p>Total Shots Played above or under Awarded Shots</p></td>
        <td><p>Points Scored</p></td>
      </tr>
      <tr>
		<td><p>+2 or more</p></td>
        <td><p>0</p></td>
      </tr>
      <tr>
		<td><p>+1</p></td>
        <td><p>1</p></td>
      </tr>

      <tr>
        <td><p>0</p></td>
        <td><p>2</p></td>
      </tr>
      <tr>
        <td><p>-1</p></td>
        <td><p>3</p></td>
      </tr>
      <tr>
        <td><p>-2</p></td>
        <td><p>4</p></td>
      </tr>
      <tr>
        <td><p>-3</p></td>
        <td><p>5</p></td>
      </tr>
      <tr>
        <td><p>-4</p></td>
        <td><p>6</p></td>
      </tr>
      </table>
      <p>&nbsp;</p>
	<h2>Net score:</h2>
	<p>Net score is your score for each hole, minus the shots you are allowed based on your handicap. For example, if you have a handicap of 12, you get 1 extra shot on holes with SI 1 to 12. If you have a handicap of 24, you get 1 extra shot on all 18 holes, plus 1 additional shot on holes with SI 1 to 6 (18 + 6 = 24).</p>
	<p>&nbsp;</p>
	<p>When you've added a round, you can see the points allowance for each hole on the scorecard. It's the little grey number next to your score for each hole.</p>
	<p>&nbsp;</p>
	<p>So if a 24 handicap player scored 6 on a par 4 SI 5 hole, his net score would be 6 - 2 = 4.</p>
	
</div><?php }
}
