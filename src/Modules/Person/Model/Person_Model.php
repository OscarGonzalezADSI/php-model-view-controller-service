<?php

class Person_Model extends Person implements Person_Model_Interface
{
  public function mainPerson()
  {
      $this->persons = [];
	  include_once "../src/Modules/Person/Model/conexion.php";
	  $this->conexion = new Conexion();	
  }
  
  public function insert()
  {
    $id = $this->getId();
    $nombre = $this->getNombre();
    $apellido = $this->getApellido();
    $this->persons[] = new Person($id, $nombre, $apellido);
  }
  
  public function update()
  {
	$index = $this->getIndexById($this->getId());
	if($index != -1)
	{
      $this->persons[$index]->nombre = $this->getNombre();
      $this->persons[$index]->apellido = $this->getApellido();
	}
  }

  public function deleteP(): Bool
  {
	$index = $this->getIndexById($this->getId());
	if($index != -1)
	{
	  array_splice($this->persons, $index , 1);
	}
    return True;
  }
  
  public function countPersons(): Int
  {
    return count((array) $this->getPersons());
  }
    
  public function selectP(): String
  {
    return json_encode($this->getPersons());
  }
    
  public function selectPersonById($id): String
  {
    return json_encode($this->getPersonById($id));
  }
    
  public function getIndexById($id)
  {
    $index = -1;
    $countt = $this->countPersons();
    if($countt>0){
      for($i=0; $this->countPersons() > $i; $i++)
      {
        if($this->persons[$i]->id == $id)
        {
          $index = (integer)$i;
          $i = $this->countPersons();
        }
      }
    }
    return $index;
  }
  
  private function getPersons()
  {
    return $this->persons;
  }
    
  private function getPersonById($id)
  {
    $index = $this->getIndexById($id);
    return $this->persons[$index];
  }

}
