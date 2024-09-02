<?php
// agregar_rol.php

// Conexión a la base de datos
$conexion = new mysqli("localhost", "admin", "admin", "proyecto");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Providers</title>
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
								<a href="admin.php" class="full-width">
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
						<a href="products.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
								Productos
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="sales.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								Ventas
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="providers.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								Proveedores
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventory.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr">
								Inventario
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="providers.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-collection-item"></i>
							</div>
							<div class="navLateral-body-cr">
								Reportes
							</div>
						</a>
					</li>
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
				<h3 style="margin-top: 8%; margin-left: 10%"> Ingresar un nuevo rol</h3>
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
			<a href="#tabNewProvider" class="mdl-tabs__tab is-active">Nuevo</a></div>
			<div class="mdl-tabs__panel is-active" id="tabNewProvider">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Rol
							</div>
							<div class="full-width panel-content">
								<form action="procesar_rol.php" method="POST" onsubmit="return validateForm()">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Ingrese los datos del rol</legend>
            <br>
        </div>
        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIProvider" name="DNIProvider">
                <label class="mdl-textfield__label" for="DNIProvider">ID PERFIL</label>
                <span class="mdl-textfield__error">Número Inválido</span>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9 ]*(\.[0-9]+)?" id="NameProvider" name="NameProvider">
                <label class="mdl-textfield__label" for="NameProvider">Nombre</label>
                <span class="mdl-textfield__error">Nombre Inválido</span>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea class="mdl-textfield__input" id="descripcion" name="descripcion" rows="3"></textarea>
                <label class="mdl-textfield__label" for="descripcion">Descripción</label>
                <span class="mdl-textfield__error">Ingrese la descripción</span>
            </div>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                <div id="textareas-container">
                    <!-- Los textareas se agregarán aquí dinámicamente -->
                </div>
            </div>

            <div style="color: rgba(189,189,189,1.00)" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <label for="accesos" style="color: ">Accesos</label>
                    <hr style="width: 30%; margin-top: 0.1%">
                    <p>
                        <input class="checkbox" type="checkbox" name="accesos[]" id="checkbox1" value="Agregar usuarios">
                        <label for="checkbox1">Agregar usuarios</label><br><br>
                        <input class="checkbox" type="checkbox" name="accesos[]" id="checkbox2" value="Modificar Usuarios">
                        <label for="checkbox2">Modificar Usuarios</label><br><br>
                        <input class="checkbox" type="checkbox" name="accesos[]" id="checkbox3" value="Eliminar Usuarios">
                        <label for="checkbox3">Eliminar Usuarios</label><br><br>
                        <input class="checkbox" type="checkbox" name="accesos[]" id="checkbox4" value="Productos">
                        <label for="checkbox4">Productos</label><br><br>
                        <input class="checkbox" type="checkbox" name="accesos[]" id="checkbox5" value="Ventas">
                        <label for="checkbox5">Ventas</label><br><br>
						<input class="checkbox" type="checkbox" name="accesos[]" id="checkbox6" value="Agregar proveedor">
                        <label for="checkbox1">Agregar proveedor</label><br><br>
						<input class="checkbox" type="checkbox" name="accesos[]" id="checkbox7" value="Ver Proveedores">
                        <label for="checkbox1">Ver Proveedores</label><br><br>
						<input class="checkbox" type="checkbox" name="accesos[]" id="checkbox8" value="Inventario">
                        <label for="checkbox1">Inventario</label><br><br>
						<input class="checkbox" type="checkbox" name="accesos[]" id="checkbox9" value="Reportes">
                        <label for="checkbox1">Reportes</label><br><br>
                    </p>
                    <div id="checkboxError" class="error"></div>
                </div>
            </div>
        </div>									
    </div>
    <p class="text-center">
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProvider">
            <i class="zmdi zmdi-plus"></i>
        </button>
    </p>
</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
 <script>
        function updateTextareas() {
            // Obtener el contenedor de textareas
            const container = document.getElementById('textareas-container');
            // Limpiar el contenedor
            container.innerHTML = '';

            // Obtener todos los checkboxes
            const checkboxes = document.querySelectorAll('.checkbox');
            let atLeastOneChecked = false; // Variable para verificar si al menos un checkbox está marcado

            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    atLeastOneChecked = true; // Al menos un checkbox está marcado
                    // Crear un nuevo div para el textarea
                    const div = document.createElement('div');
                    div.className = 'text-area-container';

                    // Crear el textarea
                    const textarea = document.createElement('textarea');
                    textarea.className = 'mdl-textfield mdl-js-textfield mdl-textfield--floating-label';
                    textarea.style.width = '500px';
					textarea.style.height = '50px';
					textarea.style.marginTop = '20px';
                    textarea.placeholder = `Descripción`;

                    // Añadir el textarea al div
                    div.appendChild(textarea);
                    
                    // Añadir el div al contenedor
                    container.appendChild(div);
                }
            });

			
            // Manejar el mensaje de error si no hay checkboxes seleccionados
            const errorDiv = document.getElementById('checkboxError');
            if (atLeastOneChecked) {
                errorDiv.textContent = ''; // Limpiar el mensaje de error si hay checkboxes seleccionados
            } else {
                errorDiv.textContent = 'Por favor, seleccione al menos un checkbox para agregar descripciones.';
            }
        }
    </script>
<script src="js/validacionformularioeditar.js" type="text/javascript" ></script>
</html>
<?php
$conexion->close();
?>