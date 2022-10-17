<h1>Welcome back, {$currentuser.firstname}</h1>
<div class="hpIntroArea">
			
	<script type="text/javascript">
	{literal}

		function chart(feed) {
			var so = new SWFObject("/tracker/flash/charts/Line.swf?PBarLoadingText={/literal}{$domain.pagetitle}{literal} chart loading&XMLLoadingText=Retrieving your round data", "images", "770", "332", "8", "#ffffff");	
			so.addParam("wmode", "transparent");	
			so.addParam("flashVars", "&dataURL=/" + feed);	
			so.write("trackingFlash");
		
		}								
		
	{/literal}
		
	</script>

	<div id="trackingFlash">

		<p>Flash is required!</p>
					
	</div>

	<script type="text/javascript">
	{literal}

		chart('tracker/statistics.xml.php?mode=lastrounds-total');
		
	{/literal}
		
	</script>			
				
</div>