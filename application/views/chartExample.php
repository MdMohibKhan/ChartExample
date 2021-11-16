<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Chart Example</title>

		<script src="<?php echo base_url('public/js/chart.min.js'); ?>"></script>
		




		
	</head>
	<body>
		

		<div id="container" style="text-align: center;">
			<h1>Chart Example</h1>
			<div style="width: 100%; overflow: hidden;">

				<div id="chart1" style="margin-top:20px; width:300px; height:300px; float: left;">
				<canvas id="barChart" width="200" height="200"></canvas>
				
				<script>
					const ctx = document.getElementById('barChart').getContext('2d');

					const myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
							datasets: [{
								label: '# of Votes',
								data: [12, 19, 3, 5, 2, 3],
								backgroundColor: [
									'rgba(255, 99, 132, 0.2)',
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 206, 86, 0.2)',
									'rgba(75, 192, 192, 0.2)',
									'rgba(153, 102, 255, 0.2)',
									'rgba(255, 159, 64, 0.2)'
								],
								borderColor: [
									'rgba(255, 99, 132, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 206, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				</script>

				</div>

				<div id="chart2" style="margin-left: 320px; margin-top:20px; width:300px; height:300px;">
					<canvas id="lineChart" width="200" height="200"></canvas>
					<script>
						const lineCtx = document.getElementById('lineChart').getContext('2d');

						const labels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const data = {
						labels: labels,
						datasets: [{
							label: 'My First Dataset',
							data: [65, 59, 80, 81, 56, 55, 40],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 255, 255, 0.2)'
							],
							borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
							],
							borderWidth: 1
						}]
						};

						const config = {
							type: 'line',
							data: data,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							},
							};


							const myChart2 = new Chart(lineCtx, config);
					</script>

				</div>





				<div id="chart3" style="margin-left: 640px; margin-top:-300px; width:300px; height:300px;">
					<canvas id="radarChart" width="200" height="200"></canvas>
					<script>
						const radarCtx = document.getElementById('radarChart').getContext('2d');

						const radarlabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const radardata = {
						labels: radarlabels,
						datasets: [{
							label: 'My First Dataset',
							data: [65, 59, 80, 81, 56, 55, 40],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 255, 255, 0.2)'
							],
							borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
							],
							borderWidth: 1
						}]
						};

						const radarconfig = {
							type: 'radar',
							data: radardata,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							},
							};


							const myChart3 = new Chart(radarCtx, radarconfig);
					</script>

				</div>




				<div id="chart4" style="margin-left: 960px; margin-top:-300px; width:300px; height:300px;">
					<canvas id="doughnutChart" width="200" height="200"></canvas>
					<script>
						const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');

						const doughnutlabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const doughnutdata = {
						labels: doughnutlabels,
						datasets: [{
							label: 'My First Dataset',
							data: [65, 59, 80, 81, 56, 55, 40],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 255, 255, 0.2)'
							],
							borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
							],
							borderWidth: 1
						}]
						};

						const doughnutconfig = {
							type: 'doughnut',
							data: doughnutdata,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							},
							};


							const myChart4 = new Chart(doughnutCtx, doughnutconfig);
					</script>

				</div>




				<div id="chart5" style="margin-left: 0px; margin-top:20px; width:300px; height:300px;">
					<canvas id="pieChart" width="200" height="200"></canvas>
					<script>
						const pieCtx = document.getElementById('pieChart').getContext('2d');

						const pielabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const piedata = {
						labels: pielabels,
						datasets: [{
							label: 'My First Dataset',
							data: [65, 59, 80, 81, 56, 55, 40],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 255, 255, 0.2)'
							],
							borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
							],
							borderWidth: 1
						}]
						};

						const pieconfig = {
							type: 'pie',
							data: piedata,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							},
							};


							const myChart5 = new Chart(pieCtx, pieconfig);
					</script>

				</div>




				<div id="chart6" style="margin-left: 320px; margin-top:-300px; width:300px; height:300px;">
					<canvas id="polarAreaChart" width="200" height="200"></canvas>
					<script>
						const polarAreaCtx = document.getElementById('polarAreaChart').getContext('2d');

						const polarArealabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const polarAreadata = {
						labels: polarArealabels,
						datasets: [{
							label: 'My First Dataset',
							data: [65, 59, 80, 81, 56, 55, 40],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 255, 255, 0.2)'
							],
							borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
							],
							borderWidth: 1
						}]
						};

						const polarAreaconfig = {
							type: 'polarArea',
							data: polarAreadata,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							},
							};


							const myChart6 = new Chart(polarAreaCtx, polarAreaconfig);
					</script>

				</div>





				<div id="chart7" style="margin-left: 640px; margin-top:-300px; width:300px; height:300px;">
					<canvas id="bubbleChart" width="200" height="200"></canvas>
					<script>
						const bubbleCtx = document.getElementById('bubbleChart').getContext('2d');

						// const bubblelabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const bubbledata = {
								datasets: [{
									label: 'First Dataset',
									data: [{
									x: 20,
									y: 30,
									r: 15
									}, {
									x: 40,
									y: 10,
									r: 10
									}],
									backgroundColor: 'rgb(255, 99, 132)'
								}]
								};

						const bubbleconfig = {
							type: 'bubble',
							data: bubbledata,
							options: {}
						};


							const myChart7 = new Chart(bubbleCtx, bubbleconfig);
					</script>

				</div>



				<div id="chart8" style="margin-left: 960px; margin-top:-300px; width:300px; height:300px;">
					<canvas id="scatterChart" width="200" height="200"></canvas>
					<script>
						const scatterCtx = document.getElementById('scatterChart').getContext('2d');

						// const scatterlabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const scatterdata = {
								datasets: [{
									label: 'Scatter Dataset',
									data: [{
									x: -10,
									y: 0
									}, {
									x: 0,
									y: 10
									}, {
									x: 10,
									y: 5
									}, {
									x: 0.5,
									y: 5.5
									}],
									backgroundColor: 'rgb(255, 99, 132)'
								}],
								};

						const scatterconfig = {
							type: 'scatter',
							data: scatterdata,
							options: {
								scales: {
								x: {
									type: 'linear',
									position: 'bottom'
								}
								}
							}
						};


							const myChart8 = new Chart(scatterCtx, scatterconfig);
					</script>

				</div>



				<div id="chart9" style="margin-left: 0px; margin-top:20px; width:300px; height:300px;">
					<canvas id="mixedChart" width="200" height="200"></canvas>
					<script>
						const mixedCtx = document.getElementById('mixedChart').getContext('2d');

						// const mixedlabels=['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','White'];

						const mixeddata = {
							labels: [
								'January',
								'February',
								'March',
								'April'
							],
							datasets: [{
								type: 'bar',
								label: 'Bar Dataset',
								data: [10, 20, 30, 40],
								borderColor: 'rgb(255, 99, 132)',
								backgroundColor: 'rgba(255, 99, 132, 0.2)'
							}, {
								type: 'line',
								label: 'Line Dataset',
								data: [50, 50, 50, 50],
								fill: false,
								borderColor: 'rgb(54, 162, 235)'
							}]
						};

						const mixedconfig = {
							type: 'scatter',
							data: mixeddata,
							options: {
								scales: {
								y: {
									beginAtZero: true
								}
								}
							}
						};


							const myChart9 = new Chart(mixedCtx, mixedconfig);
					</script>

				</div>



			</div>

			
		</div>

	</body>
</html>