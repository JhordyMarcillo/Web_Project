
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrators</title>
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
<<<<<<< HEAD
    
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
=======
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
					<li class="full-width divider-menu-h"></li>
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
>>>>>>> 907ede4838e97103150498a41b292d87fee27392
					
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr">
								Proveedores
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="providers.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr">
										Agregar Prooveedor
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="mostrarProviders.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr">
										Ver Prooveedores
									</div>
								</a>
							</li>							
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
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
					
<<<<<<< HEAD
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
                                <a href="Ventas.html" class="full-width">
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
=======
					<li class="full-width divider-menu-h"></li>
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
				</ul>
			</nav>
		</div>
	</section>
>>>>>>> 907ede4838e97103150498a41b292d87fee27392
	
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
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				<h3 style="margin-top: 8%; margin-left: 10%"> Modificar usuario</h3>
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-content">
								<form id="form1" name="form1" method="post" action="update.php">
									
									<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Obtener los datos del usuario seleccionado
    $sql = "SELECT * FROM cliente WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        echo "<style>
                body {
                    font-family: Arial, sans-serif;
                }
                form {
                    max-width: 500px;
                    margin: 50px auto;
                    padding: 20px;
                    background-color: #f7f7f7;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                form h3 {
                    text-align: center;
                    margin-bottom: 20px;
                }
                label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }
                input[type='text'], input[type='email'], input[type='date'] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-sizing: border-box;
                }
                input[type='submit'] {
                    width: 100%;
                    padding: 10px;
                    background-color: #ff6600; /* Color naranja */
                    border: none;
                    border-radius: 5px;
                    color: white;
                    font-weight: bold;
                    cursor: pointer;
                }
                input[type='submit']:hover {
                    background-color: #e65c00; /* Color naranja más oscuro al pasar el mouse */
                }
            </style>";
        
        echo "<form method='post' action=''>
                <h3>Editar Usuario</h3>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <label>Cédula:</label>
                <input type='text' name='cedula' value='" . $row['cedula'] . "'>
                <label>Nombre:</label>
                <input type='text' name='nombre' value='" . $row['nombre'] . "'>
                <label>Apellido:</label>
                <input type='text' name='apellido' value='" . $row['apellido'] . "'>
                <label>Dirección:</label>
                <input type='text' name='direccion' value='" . $row['direccion'] . "'>
                <label>Teléfono:</label>
                <input type='text' name='telefono' value='" . $row['telefono'] . "'>
                <label>Correo:</label>
                <input type='email' name='correo' value='" . $row['correo'] . "'>
                <label for='select' style='color: #A3A3A3; font-family: sans-serif; font-size: 15px;' class='mdl-typography--menu'>
                            Estado Civil: 
                            <select style='margin-left: 6%; display: inline-block; width: 40%; padding: 6px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; box-sizing: border-box;' name='estadoCivil' id='estado'>
                                <option value='' disabled>Escoja una opción</option>
                                <option value='Soltero' " . ($row['estadoCivil'] == 'Soltero' ? 'selected' : '') . ">Soltero</option>
                                <option value='Casado' " . ($row['estadoCivil'] == 'Casado' ? 'selected' : '') . ">Casado</option>
                                <option value='Viudo' " . ($row['estadoCivil'] == 'Viudo' ? 'selected' : '') . ">Viudo</option>
                            </select>
                        </label> 
                <label>Fecha de Nacimiento:</label>
                <input type='date' name='fechaNacimiento' value='" . $row['fechaNacimiento'] . "'>
                <input type='submit' name='update' value='Guardar cambios'>
              </form>";
    } else {
        echo "Usuario no encontrado.";
    }
    $stmt->close();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $estadoCivil = $_POST['estadoCivil'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    $sql = "UPDATE cliente SET cedula=?, nombre=?, apellido=?, direccion=?, telefono=?, correo=?, estadoCivil=?, fechaNacimiento=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $cedula, $nombre, $apellido, $direccion, $telefono, $correo, $estadoCivil, $fechaNacimiento, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Datos actualizados correctamente');
        window.location.href='client.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar los datos');</script>";
    }

    $stmt->close();
}

$conn->close();
?>


									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel" id="tabListAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de Administrador
							</div>
							<div class="full-width panel-content">
								
				<!-- Busqueda -->
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchAdmin">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
						<!-- Listado -->		
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>





