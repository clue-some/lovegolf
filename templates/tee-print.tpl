<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Love Golf - {$course.name} - {$tee.colour} Tee Scorecard</title>
<link href="/tracker/wl/lovegolf/css/div-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/tracker/wl/lovegolf/css/text-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/tracker/wl/lovegolf/css/safari-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/tracker/wl/lovegolf/css/scorecard-print.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 7]>
<link rel="stylesheet" href="/tracker/wl/lovegolf/css/ie7plus-style.css" type="text/css">
<![endif]-->
<!--[if lte IE 6]>
<link rel="stylesheet" href="/tracker/wl/lovegolf/css/ie6below-style.css" type="text/css">
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" /> 
<link rel="icon" href="/favicon.ico" /> 
</head>
<body>      
	
				<div class="courseInformation">
				<p>{$club.name}</p>
				<p>{$club.address|nl2br}</p>
				<p>&nbsp;</p>
				<p>{$club.telephone}</p>
				<p>{$club.email}</p>
				<p>{$club.website}</p>
				</div>
	
				<img class="logo" src="/tracker/wl/lovegolf/images/im-love-golf-logo-sml-mono.gif" alt="{$domain.pagetitle} Logo" />
	
				<h1>{$course.name}</h1>

				<h2>{$tee.colour} Tee, SSS {$tee.sss}</h2>
			
						<div class="addScorecardDetails">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scTop">
										<td><p>Hole</p></td>
										<td><p>Yards</p></td>
										<td><p>SI</p></td>
										<td><p>Par</p></td>
										<td><p>Score</p></td>
									  </tr>
{section name=hole loop=10 start=1}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}{assign var="holesi" value="hole`$smarty.section.hole.index`si"}{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$tee.$holedistance}</p></td>
										<td><p>{$tee.$holesi}</p></td>
										<td><p>{$tee.$holepar}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
{/section}
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$tee.totalyardsfront9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparfront9}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									</table>
								</td>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scExtra">
										<td><p>FIR</p></td>
										<td><p>GIR</p></td>
										<td><p>Up & Down</p></td>
										<td><p>Sand Save</p></td>
										<td><p>Putts</p></td>
										<td><p>Penalties</p></td>
									  </tr>
{section name=hole loop=10 start=1}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}{assign var="holefairway" value="hole`$smarty.section.hole.index`fairway"}
{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
{assign var="holebunker" value="hole`$smarty.section.hole.index`bunker"}
{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}

{include file="modules/round/includes/holes/stats/hole-noinput.tpl"}
{/section}									  
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>									  

									</table>
								</td>
							  </tr>
							  <tr>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scTop">
										<td><p>Hole</p></td>
										<td><p>Yards</p></td>
										<td><p>SI</p></td>
										<td><p>Par</p></td>
										<td><p>Score</p></td>
									  </tr>
{section name=hole loop=19 start=10}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}{assign var="holesi" value="hole`$smarty.section.hole.index`si"}{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$tee.$holedistance}</p></td>
										<td><p>{$tee.$holesi}</p></td>
										<td><p>{$tee.$holepar}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
{/section}
									  <tr class="scDetails">
										<td><p>IN</p></td>
										<td><p>{$tee.totalyardsback9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparback9}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$tee.totalyardsfront9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparfront9}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>TOTAL</p></td>
										<td><p>{$tee.totalyards}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalpar}</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									</table>
								</td>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scExtra">
										<td><p>FIR</p></td>
										<td><p>GIR</p></td>
										<td><p>Up & Down</p></td>
										<td><p>Sand Save</p></td>
										<td><p>Putts</p></td>
										<td><p>Penalties</p></td>
									  </tr>
{section name=hole loop=19 start=10}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
{assign var="holefairway" value="hole`$smarty.section.hole.index`fairway"}
{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
{assign var="holebunker" value="hole`$smarty.section.hole.index`bunker"}
{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}

{include file="modules/round/includes/holes/stats/hole-noinput.tpl"}
{/section}
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>									  
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>									  
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>									  
									</table>
								</td>
							  </tr>
							</table>
							<h1 style="font-size: 12px;">How to record extra stats:</h1>
							<p style="font-size: 10px;"><strong>FIR</strong> - If you missed the fairway, put a cross in the box and write where the ball landed (left, right or short). If you hit the fairway, put a tick in the box write where the ball landed (centre, left, right or short).</p>
							<p style="font-size: 10px;">&nbsp;</p>
							<p style="font-size: 10px;"><strong>GIR</strong> - If you missed the green, put a cross in the box and write where the ball landed (left, right, long or short). If you hit the green, put a tick in the box write where the ball landed (pin, left, right, long or short).</p>
							<p style="font-size: 10px;">&nbsp;</p>
							<p style="font-size: 10px;"><strong>Up & Down</strong> - Enter data into this box if you attempted an up & down. If you attempted an up & down, but failed to make it, put a cross in the box. If you attempted an up & down and succeeded, put a tick in the box.</p>
							<p style="font-size: 10px;">&nbsp;</p>
							<p style="font-size: 10px;"><strong>Sand Save</strong> - Enter data into this box if you attempted a sand save. If you attempted a sand save, but failed to make it, put a cross in the box. If you attempted a sand save and succeeded, put a tick in the box.</p>
							<p style="font-size: 10px;">&nbsp;</p>
							<p style="font-size: 10px;"><strong>Putts</strong> - Simply write the number of putts taken into the box for each hole.</p>
							<p style="font-size: 10px;">&nbsp;</p>
							<p style="font-size: 10px;"><strong>Penalties</strong> - Simply write the number of penalties taken into the box for each hole (leave blank or put '0' if none were taken).</p>
							<p style="font-size: 10px;">&nbsp;</p>
							
						</div>						
										
	<script type="text/javascript">
	{literal}
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	{/literal}
	</script>
	<script type="text/javascript">
	{literal}
		try {
			var pageTracker = _gat._getTracker("UA-11119459-1");
			pageTracker._trackPageview();
		} catch(err) {}
	{/literal}
	</script>
</body>
</html>