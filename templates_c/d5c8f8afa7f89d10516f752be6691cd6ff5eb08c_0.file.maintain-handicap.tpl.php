<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-09 00:58:58
  from 'c:\vhosts\lovegolf\templates\modules\help-support\maintain-handicap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5aa1dc52a04188_36522364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c8f8afa7f89d10516f752be6691cd6ff5eb08c' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\help-support\\maintain-handicap.tpl',
      1 => 1403786264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa1dc52a04188_36522364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="helpItemArea">

	<h1>How can I improve my game?</h1>
	<h2>Maintain your handicap</h2>
	<p>Keeping an up-to-date handicap is important in many ways. When you add a new round to <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
, you can choose whether or not we should track your handicap. If you choose to, <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 will calculate and update your handicap quickly and accurately.</p>
	<p>&nbsp;</p>
	<h2>How do we do it?</h2>
	<p>Firstly, if you don't already have a handicap, we'll calculate it from the first 3 rounds you enter and maintain it from there. If you already have one and entered it during the sign-up process, we'll maintain it right away.</p>
	<p>&nbsp;</p>
	<h2>Here is a breakdown of the how our calculations are made:</h2>
	<p>Handicap is a rating applied to players so that they can play with others who are better or worse than them fairly. It relies on the SSS (Standard Scratch Score) of the course.</p>
	<p>&nbsp;</p>
	<p>When you create an account with <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
, we'll generate your handicap from the first 3 rounds you play based on a standard starting hanidcap of 28 for men, 36 for women and 54 for juniors. If you already have a handicap you can enter this when you activate your account and skip the automatic generation process.</p>
	<p>&nbsp;</p>
	<p>If you didn't enter a handicap during sign up, you will need to add 3 rounds to <?php echo $_smarty_tpl->tpl_vars['domain']->value['pagetitle'];?>
 before your new handicap can be calculated. Your handicap is then updated each time you add a round (although you can choose not to track your handicap during the add round process - great for practice rounds).</p>
	<p>&nbsp;</p>
	<p>Before your new handicap can be calculated, the number of extra shots you are allowed must be worked out based on the current handicap. Once this is done, the scores must be adjusted. According to CONGU (the governing body for golf handicaps in the UK) no-one can score more than a double bogey on any hole, so if you score higher than that, it must be adjusted back, for example - If you score 8 on a par 5, your score will be adjusted to 7, which is 5 + 2.</p>
	<p>&nbsp;</p>
	<p>Buffer zones are used to calculate the new handicap based on a your hanidcap category. Below is a table showing categories and buffer zones.</p>
	<p>&nbsp;</p>
	<table width="520" border="0" cellspacing="0" cellpadding="0" class="shipping">
      <tr class="scEntry">
        <td><p>Category</p></td>
        <td><p>Handicap Range</p></td>
        <td><p>Buffer Zone</p></td>
        <td><p>Reduction (shot)</p></td>
        <td><p>Increase (round)</p></td>
      </tr>
      <tr>
		<td><p>1</p></td>
        <td><p>0.1 - 5.4</p></td>
        <td><p>0 to 1</p></td>
        <td><p>-0.1</p></td>
        <td><p>0.1</p></td>
      </tr>
      <tr>
		<td><p>2</p></td>
        <td><p>5.5 - 12.4</p></td>
        <td><p>0 to 2</p></td>
        <td><p>-0.2</p></td>
        <td><p>0.1</p></td>
      </tr>

      <tr>
        <td><p>3</p></td>
        <td><p>12.5 - 20.4</p></td>
        <td><p>0 to 3</p></td>
        <td><p>-0.3</p></td>
        <td><p>0.1</p></td>

      </tr>
      <tr>
        <td><p>4</p></td>
        <td><p>20.5 - 28.4</p></td>
        <td><p>0 to 4</p></td>
        <td><p>-0.4</p></td>
        <td><p>0.1</p></td>
      </tr>
      <tr>
        <td><p>5</p></td>
        <td><p>28.5 +</p></td>
		<td><p>0 to 5</p></td>
		<td><p>-0.5</p></td>
		<td><p>0.1</p></td>
      </tr>
      </table>
	<p>&nbsp;</p>
	<p>A players handicap is always to one decimal point, but for playing and calculation purposes, your handicap is rounded up or down to give a playing handicap. An actual handicap of 14.3 is a playing handicap of 14. 14.5 is a playing handicap of 15.</p>
	
</div><?php }
}
