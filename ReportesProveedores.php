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
				<div class="mdl-tooltip" for="btn-menu">Mostrar / Esconder MENU</div>
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
				<i class="zmdi zmdi-truck"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				<h3 style="margin-top: 8%; margin-left: 10%">Reporte de proveedores</h3>
				</p>
			</div>
		</section>
		<div class="mdl-grid">
				<div style="width: 100%; margin-left: -2px" class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
					<div class="full-width panel mdl-shadow--2dp">
						<div class="full-width panel-tittle bg-success text-center tittles">
							Listado de Clientes
						</div>
						<div class="full-width panel-content">
							<!-- Formulario de búsqueda -->
							<form method="GET" action="">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
									<label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
										<i class="zmdi zmdi-search"></i>
									</label>
									<div class="mdl-textfield__expandable-holder">
										<input class="mdl-textfield__input" type="text" id="searchClient" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
										<label class="mdl-textfield__label" for="searchClient">Buscar Cliente</label>
									</div>
								</div>
							</form>

							<div class="mdl-list" style="width: 80%">
								<?php
								$servername = "localhost";
								$username = "admin";
								$password = "admin";
								$dbname = "proyecto";

								// Crear la conexión
								$conn = new mysqli($servername, $username, $password, $dbname);

								// Verificar la conexión
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}

								// Procesar búsqueda
								$search = isset($_GET['search']) ? $_GET['search'] : '';
								$sql = "SELECT id, ruc, compania, direccion, telefono, email, web FROM proveedores";

								if ($search) {
									$sql .= " AND (ruc LIKE '%$search%' OR compania LIKE '%$search%' OR telefono LIKE '%$search%' OR email LIKE '%$search%' OR web LIKE '%$search%')";
								}

								$result = $conn->query($sql);

								// Mostrar la tabla con resultados
								if ($result->num_rows > 0) {
									echo "<style>
    table {
        margin: 40px auto;
		margin-left: 110px;
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px 20px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        text-align: center;
    }
    td {
        background-color: #f9f9f9;
    }
    tr:nth-child(even) td {
        background-color: #f2f2f2;
    }
    tr:hover td {
        background-color: #e0e0e0;
    }
    thead th {
        border-bottom: 2px solid #4CAF50;
    }
    tfoot td {
        font-weight: bold;
        border-top: 2px solid #4CAF50;
    }
    a {
        color: #2196F3;
        text-decoration: none;
        font-weight: bold;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
";

									echo "<table border='1'>
            <tr>
                <th>ID</th>
				<th>RUC</th>
                <th>Compania</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
				<th>Pagina web</th>
                <th>Generar Reporte</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['ruc']}</td>
                <td>{$row['compania']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
				<td>{$row['email']}</td>
				<td>{$row['web']}</td>
                <td><a href='generate_report.php?id={$row['id']}' target='_blank'>Generar Reporte</a></td>
              </tr>";
    }
									echo "</table>";
								} else {
									echo "<p>No se encontraron resultados.</p>";
								}

								$conn->close();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</body>
</html>