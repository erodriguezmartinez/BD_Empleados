<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA CONSULTAR EMPLEADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<link href="EstiloGeneral.css" rel="stylesheet" type="text/css">
		<link href="EstiloMostar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="Administrar.php">Listado</a>
			<a href="Anadir.html">Añadir</a>
		</nav>
		<!--CUERPO DE LA PÁGINA-->
			<?php 
				
				//Función para consultar un empleado en concreto
				function consultar($id){
					
					require 'Constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión
					
					$conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conectamos con la bd
			
					$consulta = "SELECT * FROM Empleados WHERE IdEmpleados=$id";	//Consulta a ejecutar			
				
					$resultado = mysqli_query($conexion, $consulta);	
					
					$fila = mysqli_fetch_assoc($resultado);
					
					//Mostramos la información del empleado
					echo"<main>";
						echo"<h3>Id Empleado</h3>";
						echo "<p>".$fila["IdEmpleados"]."</p><br />";
						echo"<h3>Nombre</h3>";
						echo "<p>".$fila["Nombre"]."</p><br />";
						echo"<h3>DNI</h3>";
						echo "<p>".$fila["DNI"]."</p><br />";
						echo"<h3>Correo</h3>";
						echo "<p>".$fila["Correo"]."</p><br />";
						echo"<h3>Teléfono</h3>";
						echo "<p>".$fila["Telefono"]."</p><br />";
						
						//Enlace por si se desea modificar el empleado mostrado
						echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=modificar">Modificar</a></td>';
					echo"</main>";
					echo"<footer>";
						echo"Panel de Administración";
					echo"</footer>";
					
				}
			?>	
	</body>
</html>