<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Combo Chart</title>
    <style>
        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        #nav li {
            float: left;
        }

        #nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #nav li a:hover {
            background-color: #111;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #chart_div {
            margin: auto;
        }
    </style>

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

<body>
    <ul id="nav">
        <li><a class="active" href="https://313wildfire.com/Front-End-Team/api/Home.php">Home</a></li>
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/About.html">About</a></li> -->
        <li><a href="https://313wildfire.com/Front-End-Team/api/OpenWeatherAPI.php">Open Weather API</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/api/Search.php">Search</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Map.html">Map</a></li>
        <!-- <li><a href="https://313wildfire.com/Front-End-Team/pages/Chart.html">Chart</a></li> -->
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Combo.html">Combo Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Gauge.html">Gauge Chart</a></li>
        <li><a href="https://313wildfire.com/Front-End-Team/pages/Contact.html">Contact</a></li>
    </ul>

    <h2>Combo Chart</h2>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>

</html>