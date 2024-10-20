<?php
include_once("conexion.php");
    include_once("consulta.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $total_registered;
    ?>

    <div class="bottom-data">
                <div class="orders">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);
                        google.charts.setOnLoadCallback(drawChart_1);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Barrio', 'Cantidad'],
                                ['Medrano', <?php echo $total_medrano; ?>],
                                ['Porvenir ', <?php echo $total_porvenir?>]
                            ]);

                            var options = {
                                title: 'Usuarios por direccion',
                                pieHole: 0.4,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }

                        
                    </script>
                    <div id="piechart" style="width: 560px; height: 300px;"></div>
                </div>

                <!-- Reminders -->
                
                        <script>
                            
                        </script>
                <!-- End of Reminders-->
</body>
</html>