<!--Esperanza Rodríguez Martínez-->
<!----------------------------------------DATOS AÑADIR--------------------------------------------------->

<?php 
	
		include('crud.php');
		$crud = new Crud();
		
	switch ($_GET["op"]) {
				case "modificar":
					$crud->modificar($_GET["id"]);
					break;
				case "borrar":
					$crud->borrar($_GET["id"]);
					break;
				case "consultar":
					$crud->consultar($_GET["id"]);
					break;
			}

?>