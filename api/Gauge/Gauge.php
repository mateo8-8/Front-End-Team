<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gauge Chart</title>

    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/Gauge/Gauge.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Temperature', 80],
                ['Humidity', 55],
                ['Pressure', 68],
                ['Wind', 70],
                ['Fire', 2]
            ]);

            var options = {
                width: 800,
                height: 240,
                redFrom: 90,
                redTo: 100,
                yellowFrom: 75,
                yellowTo: 90,
                minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

            chart.draw(data, options);

            setInterval(function() {
                data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
                chart.draw(data, options);
            }, 13000);
            setInterval(function() {
                data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
                chart.draw(data, options);
            }, 5000);
            setInterval(function() {
                data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
                chart.draw(data, options);
            }, 26000);
        }
    </script>
</head>

<body id="grad">
    <ul id="nav">
        <li><strong><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home/Home.php">Home</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/OWAPI/OpenWeatherAPI.php">Open Weather API</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Search/Search.php">Search</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Map/Map.php">Map</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Combo/Combo.php">Combo Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Gauge/Gauge.php">Gauge Chart</a></strong></li>
        <li><strong><a href="https://313wildfire.com/Front-End-Team/api/Contact/Contact.php">Contact</a></strong></li>
    </ul>

    <h2>Gauge Chart</h2>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>

</html>