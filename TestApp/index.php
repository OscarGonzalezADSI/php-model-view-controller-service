<?php

/*
 *
 * Recopilación de las peticiones del frontend
 * en una estructura de datos compatible con json
 * para ser enviada al servicio de consumirá la
 * información:
 *
 **/

include_once "./View/Person/View_Person.php";
include_once "../src/Service/Person/Service_Person.php";

$viewPerson = new Person_Data();
$order = $viewPerson->mainPerson();
$person_Service = new Service_Persona($order);

?>

<html>
<head>
<link rel="StyleSheet" href="./css/style.css" type="text/css"></link>
<script>
document.addEventListener("DOMContentLoaded", ()=>{
data = '<?php echo $person_Service->mainPerson(); ?>';
data = JSON.parse(data);

id = data[0].id;
nombre = data[0].nombre;
apellido = data[0].apellido;

document.getElementById("id").value = id;
document.getElementById("nombre").value = nombre;
document.getElementById("apellido").value = apellido;
});
</script>
</head>
<body>
	<p>Gestión:18/07/2022</p>
	</br></br>
	<p>
	  Este repositorio ha sido creado desde cero y esta todavía en desarrollo.
	</p>
	</br></br>
	<p>
	  Los objetivos logrado hasta este punto son:
	</p>
	<ul>
	  <li>Implementación de clases.</li>
	  <li>Implementación de herencias.</li>
	  <li>Implementación de interfaces.</li>
	  <li>Creación de una estructura de datos propia basada en el fromato Json</li>
	</ul>
	</br></br>
	<form>
		<fieldset>
			<h3>Persona:</h3>
			<fieldset>
				<label for="id">Id:</label>
				<input id="id" >
			</fieldset>
			<fieldset>
				<label for="nombre">Nombre:</label>
				<input id="nombre" >
			</fieldset>
			<fieldset>
				<label for="apellido">apellido:</label>
				<input id="apellido" >
			</fieldset>
		</fieldset>
	</form>
	</br></br>
	<?php
	echo '<hr>total de registros: ';
	echo $person_Service->countPersons();
	echo '<hr>';
	echo 'buscar registro por id= 2:</br><hr>';
	echo $person_Service->selectPersonById(1);
	?>
</body>
</html>
