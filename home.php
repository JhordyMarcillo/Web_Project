<?php
session_start();
$rol_id = $_SESSION['rol_id'];

// Conectar a la base de datos
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los accesos permitidos para ese rol
$sql = "SELECT accesos FROM roles WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $rol_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$accesosPermitidos = explode(',', $row['accesos']);

// Cerrar la conexión a la base de datos
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/material.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> Inventario
            </div>
            <figure class="full-width navLateral-body-tittle-menu">
                <div>
                    <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption>
                    <span>
                        Administrador<br>
                        <small>Administrador</small>
                    </span>
                </figcaption>
            </figure>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="home.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Página Principal
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>

                    <?php if (in_array('Usuario', $accesosPermitidos)): ?>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-face"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Usuarios
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                          
                            <li class="full-width">
                                <a href="admin.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Agregar Usuarios
                                    </div>
                                </a>
                            </li>
           
                            <li class="full-width">
                                <a href="client.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Modificar Usuarios
                                    </div>
                                </a>
                            </li>
                            
                            <li class="full-width">
                                <a href="Delete.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Eliminar Usuarios
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <?php endif; ?>

                    <?php if (in_array('Producto', $accesosPermitidos)): ?>
                    <li class="full-width">
                        <a href="products.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-washing-machine"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Productos
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <?php endif; ?>

					 <?php if (in_array('Proveedor', $accesosPermitidos)): ?>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-truck"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Proveedor
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            
                            <li class="full-width">
                                <a href="providers.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-truck"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Agregar Proveedor
                                    </div>
                                </a>
                            </li>
                            
                            <li class="full-width">
                                <a href="mostrarProviders.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-transform"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Ver Proveedor
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <?php endif; ?>
					
					
                    <?php if (in_array('Venta', $accesosPermitidos)): ?>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Ventas
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            
                            <li class="full-width">
                                <a href="sales.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Lista de Ventas
                                    </div>
                                </a>
                            </li>
                            
                            <li class="full-width">
                                <a href="inventory.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-shopping-cart-add"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Realizar una Venta
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <?php endif; ?>

                    <?php if (in_array('Reporte', $accesosPermitidos)): ?>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-collection-item"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                Reportes
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            
                            <li class="full-width">
                                <a href="ReportesProveedores.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-truck"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Reportes de proveedores
                                    </div>
                                </a>
                            </li>
                            
                            <li class="full-width">
                                <a href="ReportesVentas.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-collection-item-2"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Reportes de ventas
                                    </div>
                                </a>
                            </li>
                            
                            <li class="full-width">
                                <a href="reporteProductos.php" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-collection-bookmark"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        Reportes de productos
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Mostrar/Esconder menu</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-Notification" id="notifications">
							<i class="zmdi zmdi-notifications"></i>
							<div class="mdl-tooltip" for="notifications">Notificaciones</div>
						</li>
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Salir</div>
						</li>
						<li class="text-condensedLight noLink" ><small>Admin</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles">Dashboard de la Empresa</h3>
			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						4<br>
						<small>Administradores</small>
					</span>
				</div>
				<a href="client.php">
    <i class="zmdi zmdi-account tile-icon"></i>
</a>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						10<br>
						<small>Clientes</small>
					</span>
				</div>
				<a href="client.php">
    <i class="zmdi zmdi-accounts tile-icon"></i>
</a>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						5<br>
						<small>Proveedores</small>
					</span>
				</div>
				<a href="mostrarProviders.php">
    <i class="zmdi zmdi-truck tile-icon"></i>
</a>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						11<br>
						<small>Categorias</small>
					</span>
				</div>
				<a href="products.php">
    <i class="zmdi zmdi-label tile-icon"></i>
</a>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						121<br>
						<small>Productos</small>
					</span>
				</div>
				<a href="products.php">
    <i class="zmdi zmdi-label tile-icon"></i>
</a>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						7<br>
						<small>Ventas</small>
					</span>
				</div>
				<a href="sales.html">
    <i class="zmdi zmdi-shopping-cart tile-icon"></i>
</a>
			</article>
		</section>
	</section>
</body>
</html>