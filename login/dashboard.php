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
                                echo $_SESSION['nombre'] ;
                            } else {
                                echo 'Inicie Sesion';
                            }

                            ?></span>
                    </a>
                </li>

                <li>
                    <a href="#">
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

               <!-- Agregar un elemento de navegación desplegable para las páginas -->
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
                    <a href="logout.php ">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Salir</span>
                    </a>
                </li>

                <!-- Divisor -->
            <hr class="sidebar-divider">

<!-- Elemento de navegación: menú contraído de páginas -->
<!--<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Paginas</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Inicios De Sesión:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="services.php">Servicios</a>
            <a class="collapse-item" href="contact.php">Contactanos</a>
        </div>
    </div>
           </li> -->

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
                        <div class="cardName">Número de usuarios</div>
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
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Pedidos Recientes</h2>
                        <!--<a href="#" class="btn">View All</a>-->
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Precio</td>
                                <td>Pago</td>
                                <td>Estado</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tv 65" Kalley</td>
                                <td>$2'200.000</td>
                                <td>Pagado</td>
                                <td><span class="status delivered">Entregado</span></td>
                            </tr>

                            <tr>
                                <td>Freidora Oster 4 litros</td>
                                <td>$380.000</td>
                                <td>Pendiente</td>
                                <td><span class="status pending">Pendiente</span></td>
                            </tr>

                            <tr>
                                <td> Vitrina imbera 2 puertas</td>
                                <td>$6'500.000</td>
                                <td>Pagado</td>
                                <td><span class="status return">Devolver</span></td>
                            </tr>

                            <tr>
                                <td>Muebles Familiar</td>
                                <td>$2'500.000</td>
                                <td>Pagado</td>
                                <td><span class="status inProgress">En curso</span></td>
                            </tr>

                            <tr>
                                <td>Refrigerador</td>
                                <td>$2'300.000</td>
                                <td>Pagado</td>
                                <td><span class="status delivered">Entregado</span></td>
                            </tr>

                            <tr>
                                <td>Estufa de gas 4 puestos</td>
                                <td>$380.000</td>
                                <td>Pendiente</td>
                                <td><span class="status pending">Pendiente</span></td>
                            </tr>

                            <tr>
                                <td>Portatil Hp 15-ef2512la</td>
                                <td>$1'999.999</td>
                                <td>Pagado</td>
                                <td><span class="status return">Devolver</span></td>
                            </tr>

                            <tr>
                                <td>Aire acondicionado digital</td>
                                <td>$2'100.000</td>
                                <td>Pendiente</td>
                                <td><span class="status inProgress">En curso</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Clientes recientes</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/dilys.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Dilys Nagles<br> <span>España</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/aura.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Aura Martinez<br> <span>Panamá</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/osfary.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Osfary Salcedo <br> <span>Colombia</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/brayan.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Brayan Valencia<br> <span>España</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/josser.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josser Cordoba<br> <span>EE-UU</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/jonathan.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4> Jonathan Valencia <br> <span> EE-UU </span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/royner.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4> Royner Peña <br> <span> Colombia </span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/estefania.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Estefania Palacos <br> <span>Panamá</span></h4>
                            </td>
                        </tr>
                    </table>
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
</body>

</html>