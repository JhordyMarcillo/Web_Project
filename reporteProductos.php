<?php
session_start();
$rol_id = $_SESSION['rol_id'];
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
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
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
						<a href="home.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								Página Principal
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					
					<?php if ($rol_id == 1): ?>
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
										Modificar usuarios
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
					
					<?php if ($rol_id == 1 || $rol_id == 2): ?>
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
					
					<?php if ($rol_id == 1 || $rol_id == 9): ?>
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
								<a href="sales.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-shopping-cart"></i>
									</div>
									<div class="navLateral-body-cr">
										Lista de Ventas
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="inventory.html" class="full-width">
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

					<?php if ($rol_id == 1 || $rol_id == 2): ?>
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
				<div class="mdl-tooltip" for="btn-menu">Mostrar / Esconder menu</div>
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
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-washing-machine"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					<h3 style="margin-top: 8%; margin-left: 30%">Reporte de Productos</h3>
				</p>
			</div>
		</section>
	
			
			
<div class="mdl-tabs__panel" id="tabListProducts">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
            <!-- Formulario de búsqueda -->
            <form method="GET" action="listProducts.php">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                        <i class="zmdi zmdi-search"></i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="searchProduct" name="search" value="<?php echo htmlspecialchars($search); ?>">
                        <label class="mdl-textfield__label">Buscar productos...</label>
                    </div>
                </div>
            </form>

            <!-- Categorías -->
            <nav class="full-width menu-categories">
				<ul class="list-unstyle text-center">
                    <li><a href="">Frutas y Verduras</a></li>
                    <li><a href="">Lácteos</a></li>
                    <li><a href="">Bebidas</a></li>
                    <li><a href="">Congelados</a></li>
                    <li><a href="">Carnes</a></li>
                    <li><a href="">Confitería</a></li>
                    <li><a href="">Snacks</a></li>
					<li><a href="reportProductos.php">Reporte</a></li>
                </ul>
            </nav>

            <!-- Mostrar productos -->
            <div class="full-width text-center" style="padding: 30px 0;">
                <?php
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "admin";
                $password = "admin";
                $dbname = "proyecto";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Obtener parámetros de búsqueda y categoría
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $category = isset($_GET['category']) ? $_GET['category'] : '';

                // Construir la consulta SQL
                $sql = "SELECT * FROM producto WHERE 1=1";
                if ($search) {
                    $sql .= " AND (nombre LIKE '%$search%' OR codigo LIKE '%$search%')";
                }
                if ($category) {
                    $sql .= " AND categoria = '$category'";
                }

                $result = $conn->query($sql);

                // Mostrar los productos
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Construir la ruta de la imagen QR
                        $imgSrc = 'imagenes/qr/' . $row['codigo'] . '_' . $row['nombre'] . '_' . $row['categoria'] . '_' . $row['marca'] .'_'. '.png';
                        echo "<div class='mdl-card mdl-shadow--2dp full-width product-card'>
                                <div class='mdl-card__title'>
                                    <img src='$imgSrc' alt='product' class='img-responsive'>
                                </div>
                                <div class='mdl-card__supporting-text'>
                                    <small>Stock: " . htmlspecialchars($row['unidades']) . "</small><br>
                                    <small>Categoria: " . htmlspecialchars($row['categoria']) . "</small>
                                </div>
                                <div class='mdl-card__actions mdl-card--border'>
                                    " . htmlspecialchars($row['nombre']) . "<br>
                                    <button class='mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect'>
                                        <i class='zmdi zmdi-more'></i>
                                    </button>
                                </div>
                            </div>";
                    }
                } else {
                    echo "<p>No se encontraron productos.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>

			
			
		
	</section>
</body>
</html>