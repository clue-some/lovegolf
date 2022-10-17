			<div class="moduleArea">
				
				<h1>Welcome to the Tracking Centre!</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="firstCurrent"><a href="/tracking/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Statistics</a></li>
					<li><a href="/tracking/performance/">Overall performance</a></li>
					<li><a href="/tracking/friends/">Friends comparison - <span>coming soon!</span></a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						<table width="940" align="center" cellpadding="0" cellspacing="0" border="0" background="images/PageBg.jpg">
							<tr height="70">
								<td width="33">	
								&nbsp;
								</td>
								<td align="left" valign="bottom">
									<a href="http://www.InfoSoftGlobal.com" target="_blank"><img src="/tracker/images/IGPLogo.jpg" alt="InfoSoft Global" border="0"></a>
								</td>
								<td align="right" valign="bottom">
									<img src="/tracker/images/TopRightText.gif" border="0">	
								</td>
								<td width="37">	
								&nbsp;
								</td>
							</tr>
					 
							<tr>
								<td width="33">		
								</td>
								<td height="1" colspan="2" bgColor="#EEEEEE">
								</td>
								<td width="37">		
								</td>
							</tr>
						
					<!-- Code to render the form for year selection and animation selection -->
					<tr>
						<td width="33">		
						</td>
						<td height="1" colspan="2" bgColor="#FFFFFF">
						</td>
						<td width="37">		
						</td>
					</tr>
					 
					<form name="frmYr" action="Default.asp" method="post" id="frmYr">
					<tr height="30">
						<td width="33">		
						</td>
						<td height="22" colspan="2" align="center" bgColor="#EEEEEE" valign="middle">
						<nobr>
						<span class="textbolddark">Select Year: </span>
						<input type='radio' name='Year' value='1994'><span class='text'>1994</span><input type='radio' name='Year' value='1995'><span class='text'>1995</span><input type='radio' name='Year' value='1996' checked><span class='text'>1996</span>		
						<span class="textbolddark"><span class='text'>&nbsp;&nbsp;&nbsp;</span>Animate Charts: </span>
							
						<input type="radio" name="animate" value="1" checked><span class="text">Yes</span>
						<input type="radio" name="animate" value="0"><span class="text">No</span>
						
						<span class='text'>&nbsp;&nbsp;</span>
						<input type="submit" class="button" value="Go" id="submit" 1 name="submit" 1>
						
						</nobr>	
						</td>
						<td width="37">		
						</td>
					</tr>
					</form>	
					 
					<tr>
						<td width="33">		
						</td>
						<td height="1" colspan="2" bgColor="#FFFFFF">
						</td>
						<td width="37">		
						</td>
					</tr>
					 
					<tr>
						<td width="33">		
						</td>
						<td height="1" colspan="2" bgColor="#EEEEEE">
						</td>
						<td width="37">		
						</td>
					</tr>
					<!-- End code to render form -->
					 
						<tr>
							<td height="10" colspan="4">
							</td>
						</tr>
					 
						<tr>
							<td width="33">	
							</td>
							<td colspan="2">		
						
					<a name='start' />
					<table width="875" align="center" cellspacing="0" cellpadding="0">
						<tr>
						<td align="left" width="500">
						
						<!-- START Script Block for Chart SalesByYear -->
						<div id='SalesByYearDiv' align='center'>
							Chart.
							
						</div>
							
						<script type="text/javascript">	
							//Instantiate the Chart	
							var chart_SalesByYear = new FusionCharts("/flash/charts/MSColumn3DLineDY.swf", "SalesByYear", "450", "325", "0", "1");
							
							//Provide entire XML data using dataXML method 
							chart_SalesByYear.setDataXML("<chart caption='Yearly Sales Comparison' XAxisName='Year' palette='2' animation='1' subcaption='(Click on a column to drill-down to monthly sales in the chart below)' formatNumberScale='0' numberPrefix='$' showValues='0' seriesNameInToolTip='0'><categories><category label='1994'/><category label='1995'/><category label='1996'/></categories><dataset seriesname='Revenue'><set value='219702' link='javaScript%3AupdateCharts%281994%29%3B'/><set value='682796' link='javaScript%3AupdateCharts%281995%29%3B'/><set value='547248' link='javaScript%3AupdateCharts%281996%29%3B'/></dataset><dataset seriesName='Units Sold' parentYAxis='S'><set value='7381'/><set value='25007'/><set value='18929'/></dataset><styles><definition><style type='font' color='666666' name='CaptionFont' size='15' /><style type='font' name='SubCaptionFont' bold='0' /></definition><application><apply toObject='caption' styles='CaptionFont' /><apply toObject='SubCaption' styles='SubCaptionFont' /></application></styles></chart>");
									
							//Finally, render the chart.
							chart_SalesByYear.render("SalesByYearDiv");
						</script>	
						<!-- END Script Block for Chart SalesByYear -->
						
						</td>
						<td width="3">
						</td>
						<td valign="top" style="Border-left:#EEEEEE 1px solid;">		
							<table width="90%" align="right">
								<tr>
									<td>
									
						<!-- START Script Block for Chart TopEmployees -->
						<div id='TopEmployeesDiv' align='center'>
							Chart.
							
						</div>
							
						<script type="text/javascript">	
							//Instantiate the Chart	
							var chart_TopEmployees = new FusionCharts("/flash/charts/Pie3D.swf", "TopEmployees", "400", "225", "0", "1");
							
							//Provide entire XML data using dataXML method 
							chart_TopEmployees.setDataXML("<chart caption='Top 5 Employees for 1996' palette='2' animation='1' subCaption='(Click to slice out or right click to choose rotation mode)' YAxisName='Sales Achieved' YAxisName='Quantity' showValues='0' numberPrefix='$' formatNumberScale='0' showPercentInToolTip='0'><set label='Leverling' value='100524' isSliced='0'  /><set label='Fuller' value='87790' isSliced='0'  /><set label='Davolio' value='81898' isSliced='0'  /><set label='Peacock' value='76438' isSliced='0'  /><set label='Callahan' value='55091' isSliced='0'  /><styles><definition><style type='font' name='CaptionFont' color='666666' size='15' /><style type='font' name='SubCaptionFont' bold='0' /></definition><application><apply toObject='caption' styles='CaptionFont' /><apply toObject='SubCaption' styles='SubCaptionFont' /></application></styles></chart>");
									
							//Finally, render the chart.
							chart_TopEmployees.render("TopEmployeesDiv");
						</script>	
						<!-- END Script Block for Chart TopEmployees -->
						
									</td>
								</tr>
							</table>
						</td>
						</tr>
					</table>
					 
					<!-- Some blank space between two charts -->		
					<table width="875" height="10">
						<tr>
							<td>
							</td>
						</tr>
					</table>
							
					<table width="875" align="center" cellpadding="0" cellspacing="0" border="0" style="Border-top:#EEEEEE 1px solid;">
						<tr>
						<td align="left">
						
						<!-- START Script Block for Chart SalesByCat -->
						<div id='SalesByCatDiv' align='center'>
							Chart.
							
						</div>
							
						<script type="text/javascript">	
							//Instantiate the Chart	
							var chart_SalesByCat = new FusionCharts("/flash/charts/MSColumn3D.swf", "SalesByCat", "875", "350", "0", "1");
							
							//Set the dataURL of the chart
							chart_SalesByCat.setDataURL("Data%5FSalesByCategory%2Easp%3Fyear%3D1996%26FCCurrTime%3D5%2F18%2F2009+2%5F02%5F26+PM");
									
							//Finally, render the chart.
							chart_SalesByCat.render("SalesByCatDiv");
						</script>	
						<!-- END Script Block for Chart SalesByCat -->
						
						</td>
						</tr>
					</table>
					 
					<!-- Some blank space between two charts -->		
					<table width="875" height="10">
						<tr>
							<td>
							</td>
						</tr>
					</table>
					 
					<table width="875" align="center" cellpadding="0" cellspacing="0" border="0" style="Border-top:#EEEEEE 1px solid;">
						<tr>
						<td align="left">
						
						<!-- START Script Block for Chart SalesByProd -->
						<div id='SalesByProdDiv' align='center'>
							Chart.
							
						</div>
							
						<script type="text/javascript">	
							//Instantiate the Chart	
							var chart_SalesByProd = new FusionCharts("/flash/charts/MSColumn3DLineDY.swf?ChartNoDataText=Please select a product category in the above chart to see product-wise sales.", "SalesByProd", "875", "350", "0", "1");
							
							//Provide entire XML data using dataXML method 
							chart_SalesByProd.setDataXML("<chart></chart>");
									
							//Finally, render the chart.
							chart_SalesByProd.render("SalesByProdDiv");
						</script>	
						<!-- END Script Block for Chart SalesByProd -->
						
						</td>
						</tr>
					</table>
					 
					 
								<br>
								</td>
								<td width="37">
								&nbsp;
								</td>
							</tr>	
							
							<tr>
								<td width="33">		
								</td>
								<td height="1" colspan="2" bgColor="#EEEEEE">
								</td>
								<td width="37">		
								</td>
							</tr>
							
							<tr>
								<td height="4" colspan="4">		
								</td>			
							</tr>
							
							<tr>
								<td width="33">		
								</td>
								<td colspan="2" align="center">
								<span class="text">This application was built using <a href="http://www.InfoSoftGlobal.com/FusionCharts" target="_blank"><b>FusionCharts v3</b></a> - &quot;Animated flash charts for the web&quot;.</span>
								</td>
								<td width="33">
								</td>
							</tr>
							
							<tr>
								<td width="33">		
								</td>
								<td colspan="2" align="center">
								<span class="text">© All Rights Reserved</span>
								</td>
								<td width="33">
								</td>
							</tr>
							
							<tr>
								<td height="4" colspan="4">		
								</td>			
							</tr>
						</table>
				
				</div>
				
			</div>