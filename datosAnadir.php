<!--Esperanza Rodríguez Martínez-->
<!----------------------------------------DATOS AÑADIR--------------------------------------------------->

<?php 
	
	
	if(empty($_POST["nombre_completo"]) || is_numeric($_POST["nombre_completo"]) 
		|| empty($_POST["DNI"]) || is_numeric($_POST["DNI"])
		|| empty($_POST["correo"]) || is_numeric($_POST["correo"])
		|| empty($_POST["telefono"]) || !is_numeric($_POST["telefono"])){
			
			if(empty($_POST["nombre_completo"]) || is_numeric($_POST["nombre_completo"])){
				echo "ERROR en la entrada del nombre. <br />";
			}
			if(empty($_POST["DNI"]) || is_numeric($_POST["DNI"])){
				echo "ERROR en la entrada del DNI. <br />";
			}
			if(empty($_POST["correo"]) || is_numeric($_POST["correo"])){
				echo "ERROR en la entrada del correo. <br />";
			}
			if(empty($_POST["telefono"]) || !is_numeric($_POST["telefono"])){
				echo "ERROR en la entrada del teléfono. <br />";
			}

	}else{

		include('crud.php');
		$anadir = new Crud();
		
		$anadir->anadir($_POST["nombre_completo"],$_POST["DNI"],$_POST["correo"],$_POST["telefono"]);

	}	

?>