<?php

class Person
{
  function __construct($id = Null, $nombre ="", $apellido = "")
  {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
  }
    
  function getId()
  {
    return $this->id;
  }
    
  function setId($id)
  {
    $this->id = $id;
  }
    
  function getNombre()
  {
    return $this->nombre;
  }
    
  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
    
  function getApellido()
  {
    return $this->apellido;
  }
    
  function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }
}
