<?php

class Person_Controller implements Person_Controller_Interface
{
  public function mainPerson()
  {
      $this->model = new Person_Model();
      $this->model->mainPerson();
  }
  
  public function dataModel(int $id=0, String $nombre ="", String $apellido = ""): Void
  {
      $this->model->setId($id);
      $this->model->setNombre($nombre);
      $this->model->setApellido($apellido);
  }
  
  public function insert()
  {
    $this->model->insert();
  }
  
  public function update()
  {
    $this->model->update();
  }
  
  public function deleteP(): Bool
  {
    $this->model->deleteP();
    return True;
  }
  
  public function countPersons(): Int
  {
      return $this->model->countPersons();
  }

  public function selectP(): String
  {
    return $this->model->selectP();
  }
  public function selectPersonById($id): String
  {
    return $this->model->selectPersonById($id);
  }
}