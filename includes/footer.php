<!-- js code or links will come here -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "STRAND results in percentages"              
		},
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "STEM", 
				 y: <?php echo $scorePercentageList['STEM']?>  },
				 
				{ label: "ABM",
				 y: <?php echo $scorePercentageList['ABM']?>  },
				
				{ label: "HUMSS",
				 y: <?php echo $scorePercentageList['HUMSS']?>  },
				 
				{ label: "ICT", 
				 y: <?php echo $scorePercentageList['ICT']?>  },
				
				{ label: "IA", 
				 y: <?php echo $scorePercentageList['IA']?>  },
				 
				{ label: "HE", 
				 y: <?php echo $scorePercentageList['HE']?> }
			]
		}
		]
	});
	chart.render();
}
</script>
</body>
</html>