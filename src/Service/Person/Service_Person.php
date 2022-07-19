<?php

include_once "../src/Interfaces/Person/index.php";
include_once "../src/Modules/Person/index.php";

class Service_Persona implements Person_Service_Interface
{
  function __construct($order)
  {
    $this->order = $order;
  }
  
  function mainPerson()
  {
    $this->controller = new Person_Controller();
    $this->controller->mainPerson();
    $this->insert();
    $this->update();
    $this->deleteP();
    return $this->selectP();
  }
  
  function insert()
  {
    $order = $this->order;
    $cant = count((array) $order['insert']);	
	
    for($i=0; $cant > $i; $i++)
    {
      $id_person = $order['insert'][$i]->id;
      $name = $order['insert'][$i]->nombre;
      $lastname = $order['insert'][$i]->apellido;
      $this->controller->dataModel($id_person, $name, $lastname);
      $this->controller->insert();
    }
  }
  
  function update()
  {
    $order = $this->order;
    $cant = count((array) $order['update']);
    for($i=0; $cant > $i; $i++)
    {
      $id = $order['update'][$i]->id;
      $nombre = $order['update'][$i]->nombre;
      $apellido = $order['update'][$i]->apellido;
      $this->controller->dataModel($id, $nombre, $apellido);
      $this->controller->update();
    }
  }
  
  function deleteP(): Bool
  {
    $order = $this->order;
    $cant = count((array) $order['delete']);
    for($i=0; $cant > $i; $i++)
    {
      $id = $order['delete'][$i]->id;
      $this->controller->dataModel($id);
      $this->controller->deleteP();
    }
    return true;
  }

  function selectP(): String
  {
    return $this->controller->selectP();
  }
  
  public function countPersons(): Int
  {
    return $this->controller->countPersons();
  }
  
  public function selectPersonById($id): String
  {
    return $this->controller->selectPersonById($id);
  }
}
