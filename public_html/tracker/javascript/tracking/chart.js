	function chart(type, feed, render, width, height) {
		var myChart = new FusionCharts("/tracker/flash/charts/" + type + ".swf", "chartOne", width, height, "0", "1");	
		myChart.setDataURL(feed);	
		myChart.addParam("wmode", "transparent");
		myChart.render(render);
	}	

