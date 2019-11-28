<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container {
  width: 80%;
  margin: 15px auto;
}
	</style>
</head>
<body>
<div class="container">
  <h2>Chart.js — Pie Chart Demo</h2>
  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript">
	var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Green", "Blue", "Gray", "Purple", "Yellow", "Red", "Black"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [12, 19, 3, 17, 28, 24, 7]
    }]
  }
});
</script>
<script type="text/javascript">
	var ctx = document.getElementById("bentuk").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Green", "Blue", "Gray", "Purple", "Yellow", "Red", "Black"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [12, 19, 3, 17, 28, 24, 7]
    }]
  }
});
</script>
<script type="text/javascript">
	var ctx = document.getElementById("kategori").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Green", "Blue", "Gray", "Purple", "Yellow", "Red", "Black"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [12, 19, 3, 17, 28, 24, 7]
    }]
  }
});
</script>
</body>
</html>
