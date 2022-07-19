<?php

class Person
{
	function viewRowPerson($id_person)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_person,
			name,
			lastname
			FROM person
			WHERE id_person = :id_person";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":id_person", $id_person);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
	function viewAllPerson()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_person,
			name,
			lastname
			FROM person;";
		$modules = $conexion->prepare($consulta);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
	function viewCountPerson()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$consulta = "SELECT count(id_person) as cant 
			FROM person";
		$modules = $conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}
