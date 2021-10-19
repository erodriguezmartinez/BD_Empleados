<!--Esperanza Rodríguez Martínez-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<link href="EstiloGeneral.css" rel="stylesheet" type="text/css">
		<link href="EstiloIndex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
			<?php 
				//Función para listar los empleados misrando su nombre y DNI
				function mostrar(){
					
					require 'Constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión
				
					$conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);
			
					$consulta = "SELECT * FROM Empleados";						
				
					$resultado = mysqli_query($conexion, $consulta);				
					
					while($fila = mysqli_fetch_assoc($resultado)){
						echo '<tr>';
							echo '<td>'.$fila["Nombre"].'</td>';
							echo '<td>'.$fila["DNI"].'</td>';
							echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=borrar">Borrar</a></td>';
							echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=modificar">Modificar</a></td>';
							echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=consultar">Consultar</a></td>';
						echo '</tr>';
					};
					
				};
				
			?>
		<!--TÍTULO-->
		<header>Administrar</header>
		<hr />
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="Administrar.php">Listado</a>
			<a href="Anadir.html">Añadir</a>
		</nav>
		<hr />
		<!--CUERPO DE LA PÁGINA-->
		<main>	
			<!--TABLA-->
			<table>
				<tr id="cabeceras">
					<th>Nombre</th>
					<th>DNI</th>
				</tr>
				<?php 
					mostrar();
				?>
			</table>
		</main>
	</body>
</html>