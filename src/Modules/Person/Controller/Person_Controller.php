<?php

class Person_Controller implements Person_Controller_Interface
{
  public function mainPerson()
  {
      $this->model_mysql = new Person_Model();
      $this->model_mysql = new Person_Model_Mysql();
      $this->model_mysql->mainPerson();
  }
  
  public function dataModel(int $id=0, String $nombre ="", String $apellido = ""): Void
  {
      $this->model_mysql->setId($id);
      $this->model_mysql->setNombre($nombre);
      $this->model_mysql->setApellido($apellido);
  }
  
  public function insert()
  {
    $this->model_mysql->insert();
	$this->model_mysql->insertPrepared();
  }
  
  public function update()
  {
    $this->model_mysql->update();
	$this->model_mysql->updatePrepared();
  }
  
  public function deleteP(): Bool
  {
    $this->model_mysql->deleteP();
	$this->model_mysql->deletePrepared();
    return True;
  }
  
  public function countPersons(): Int
  {
      return $this->model_mysql->countPersons();
  }

  public function selectP(): String
  {
    return $this->model_mysql->selectP();
  }
  public function selectPersonById($id): String
  {
    return $this->model_mysql->selectPersonById($id);
  }
}