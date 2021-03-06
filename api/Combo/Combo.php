<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Combo Chart</title>

    <link rel="stylesheet" href="https://313wildfire.com/Front-End-Team/api/Combo/Combo.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Los Angeles', 'San Diego', 'San Jose', 'San Francisco', 'Fresno', 'Sacramento', 'Long Beach', 'Oakland', 'Bakersfield', 'Anaheim', 'Average'],
                ['2022/01', 0.23, 0.45, 0.8, 0.14, 0.234, 0.67, 0.45, 0.8, 0.14, 0.234, 0.67],
                ['2022/02', 0.56, 0.98, 0.34, 0.12, 0.36, 0.26, 0.35, 0.34, 0.35, 0.87, 0.95],
                ['2022/03', 0.34, 0.76, 0.7, 0.25, 0.23, 0.14, 0.45, 0.8, 0.14, 0.234, 0.67],
                ['2022/04', 0.16, 0.35, 0.34, 0.35, 0.87, 0.95, 0.35, 0.34, 0.35, 0.87, 0.95],
                ['2022/05', 0.87, 0.36, 0.12, 0.87, 0.9, 0.37, 0.98, 0.34, 0.12, 0.36, 0.26]
            ]);

            var options = {
                title: 'Monthly Fire Prediction by Nodes',
                vAxis: {
                    title: 'Prob',
                    format: 'percent'
                },
                hAxis: {
                    title: 'Month',
                    format: 'percent'
                },
                seriesType: 'bars',
                series: {
                    10: {
                        type: 'line'
                    }
                }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
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

    <h2>Combo Chart</h2>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>

</html>