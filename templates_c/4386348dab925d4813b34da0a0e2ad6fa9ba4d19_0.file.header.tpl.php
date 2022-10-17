<?php
/* Smarty version 3.1.32-dev-38, created on 2018-11-16 08:30:43
  from 'c:\vhosts\lovegolf\templates\html\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5bee8033450050_14549165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4386348dab925d4813b34da0a0e2ad6fa9ba4d19' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\html\\header.tpl',
      1 => 1403646458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee8033450050_14549165 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['pagetitle']->value) {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;
} else { ?>Love Golf<?php }?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<?php if ($_smarty_tpl->tpl_vars['metakeywords']->value) {?>
	<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['metakeywords']->value;?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['metadescription']->value) {?>
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['metadescription']->value;?>
" />
<?php }?>
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/div-style.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/text-style.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/safari-style.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/firefox-style.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/jquery-ui.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
	<link href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/colorbox.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]>
	<link rel="stylesheet" href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/ie7-style.css" type="text/css">
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="/tracker/wl/<?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
/css/ie6-style.css" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="/tracker/javascript/DD_belatedPNG_0.0.8a.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	  DD_belatedPNG.fix('div, img, ul, li, .fieldButton');
	<?php echo '</script'; ?>
>
	<![endif]-->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="shortcut icon" href="/favicon.gif">
	<?php
$__section_javascript_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_javascript']) ? $_smarty_tpl->tpl_vars['__smarty_section_javascript'] : false;
$__section_javascript_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['javascripts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_javascript_0_total = $__section_javascript_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_javascript'] = new Smarty_Variable(array());
if ($__section_javascript_0_total !== 0) {
for ($__section_javascript_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_javascript']->value['index'] = 0; $__section_javascript_0_iteration <= $__section_javascript_0_total; $__section_javascript_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_javascript']->value['index']++){
?>    
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascripts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_javascript']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_javascript']->value['index'] : null)]['path'];?>
"><?php echo '</script'; ?>
>
	<?php
}
}
if ($__section_javascript_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_javascript'] = $__section_javascript_0_saved;
}
?>
	<?php echo '<script'; ?>
 src="http://platform.twitter.com/anywhere.js?id=iiePs10vhIkAGqgKNLxA&amp;v=1" type="text/javascript"><?php echo '</script'; ?>
>
<meta property="fb:app_id" content="164035020302021" /><meta property="og:site_name" content="Love Golf - lovegolf.co.uk" /><meta property="og:url" content="http://www.lovegolf.co.uk/index.php" /><meta property="og:type" content="website" /><meta property="og:title" content="Love Golf - lovegolf.co.uk" /><meta property="og:image" content="http://www.lovegolf.co.uk/tracker/wl/lovegolf/images/im-lovegolf-logo-square.gif" />
</head>

<body><?php }
}
