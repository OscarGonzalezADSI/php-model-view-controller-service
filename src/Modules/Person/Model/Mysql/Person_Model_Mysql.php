<?php

class Person_Model_Mysql extends Person_Model implements Person_Model_Mysql_Interface
{

  public function insertPrepared()
  {
	$conexion = $this->conexion;
	$id_person = $this->getId();
	$name = $this->getNombre();
	$lastname = $this->getApellido();	
	$sql = "INSERT INTO person(
	id_person, name, lastname
	)VALUES (?,?,?)";
	$reg = $conexion->prepare($sql);
	$reg->bindParam(1, $id_person);
	$reg->bindParam(2, $name);
	$reg->bindParam(3, $lastname);
	$reg->execute();	  
  }
  
  public function updatePrepared()
  {
	$conexion = $this->conexion;
	$id_person = $this->getId();
	$name = $this->getNombre();
	$lastname = $this->getApellido();
	$sql = "UPDATE person SET 
		name=:name,
		lastname=:lastname
		WHERE id_person = :id_person;";
	$reg = $conexion->prepare($sql);
	$reg->bindParam(":id_person", $id_person);
	$reg->bindParam(":name", $name);
	$reg->bindParam(":lastname", $lastname);
	$reg->execute();  
  }
  
  public function deletePrepared()
  {
	$conexion = $this->conexion;
	$id_person = $this->getId();
	$sql = "DELETE FROM person WHERE id_person = :id_person;";
	$reg = $conexion->prepare($sql);
	$reg->bindParam(":id_person", $id_person);
	$reg->execute();
  }

}
