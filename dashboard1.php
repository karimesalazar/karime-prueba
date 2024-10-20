<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="styledashboard.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        th, td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="inicio.php">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title"><?php
                            // Verificar si el usuario ha iniciado sesión
                            if (isset($_SESSION['nombre'])) {
                                echo $_SESSION['nombre'];
                            } else {
                                echo 'Inicie Sesion';
                            }
                            ?></span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <li>
                    <a href="dashboard1.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Clientes</span>
                    </a>
                </li>

                <!--<li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>-->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Páginas</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- Definir las páginas que deseas mostrar en el menú desplegable -->
                            <a class="collapse-item" href="inicio.php">Página principal</a>
                            <a class="collapse-item" href="index.php">Login</a>
                            <a class="collapse-item" href="registro.php">Registro</a>
                        </div>
                    </div>
                </li>

                <!--<li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>-->

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Salir</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!--<div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>-->

                <div class="user">
                    <img src="images/karime.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">545</div>
                        <div class="cardName">Vistas diarias</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">60</div>
                        <div class="cardName">Pedidos</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php
                            include_once("consulta.php");
                            echo $total_registered;
                            ?></div>
                        <div class="cardName">Numero de usuarios</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$6'545.000</div>
                        <div class="cardName">Ganancias</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <section>
            <?php
            // Incluir archivo de conexión
            include 'conexion.php';

            // Consultar los datos insertados
            $sql = "SELECT id, nombre, correo, contrasena, direccion, telefono FROM usuarios";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                // Crear una tabla HTML
                echo '<h2>Tabla Usuario</h2>';
                echo '<a class="btn-action create" href="crear-usuario.php" class="btn btn-create">Crear</a>'; // Enlace para crear usuario corregido
                echo '<table class="banner-title-table">';
                echo '<tr><th>ID</th><th>Usuarios</th><th>Correo</th><th>Contraseña</th><th>Dirección</th><th>Telefono</th><th>Acciones</th></tr>';
                
                // Recorrer los resultados de la consulta con un bucle foreach
                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['correo']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['contrasena']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['direccion']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
                    echo '<td>
                            <a class="btn-action update" href="editar-usuario.php?id=' . htmlspecialchars($row['id']) . '" class="btn btn-edit" onclick="return confirm(\'¿Estás seguro de que deseas editar este usuario?\');">Editar</a>
                            <a class="btn-action delete" href="eliminar-usuario.php?id=' . htmlspecialchars($row['id']) . '" class="btn btn-delete" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este usuario?\');">Eliminar</a>
                        </td>';
                    echo '</tr>';
                }
                
                echo '</table>';
            } else {
                echo '<script>window.location.href = "no_results_page.php";</script>';
            }

            // Cerrar conexión
            $conexion->close();
            ?>
            </section>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Clientes</h2>
                    </div>
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
                                ['Porvenir ', <?php echo $total_porvenir?>],
                                ['Valparaiso ', <?php echo $total_Valparaiso?>]
                            ]);

                            var options = {
                                title: 'Usuarios por direccion',
                                pieHole: 0.4,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }

                        
                    </script>
                    <div id="piechart" style="width: 700px; height: 600px;"></div>
                </div>
        
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

     <!-- Bootstrap Bundle with Popper -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   
