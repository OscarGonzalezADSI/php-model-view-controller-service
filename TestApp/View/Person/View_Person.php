<?php

/*
 * Lógica de programación sugerida para el frontend
 * la idea es que todas las ordenes sean unificadas en
 * un solo formato Json estándar que sea mantenible.
 **/ 

Class Person_Data
{
  public function mainPerson()
  {
    $order = [];
    $order['insert'] = $this->insert();
    $order['update'] = $this->update();
    $order['delete'] = $this->deleteP();
    return $order;
  }
  
  public function insert()
  {
    $personas = [];

    $id = 1;
    $nombre = "oscar";
    $apellido = "gonzalez";
    $persona = new Person($id, $nombre, $apellido);
    $personas[] = $persona;

    $id = 2;
    $nombre = "maria";
    $apellido = "gonzalez";
    $persona = new Person($id, $nombre, $apellido);
    $personas[] = $persona;

    $id = 3;
    $nombre = "jose";
    $apellido = "gutierrez";
    $persona = new Person($id, $nombre, $apellido);
    $personas[] = $persona;

    return $personas;
  }
 
  public function update()
  {
    $personas = [];

    $id = 2;
    $nombre = "maria";
    $apellido = "gomez";
    $persona = new Person($id, $nombre, $apellido);
    $personas[] = $persona;

    return $personas;
  }
  
  public function deleteP()
  {
    $personas = [];

    $id = 3;
    $nombre = "jose";
    $apellido = "gutierrez";
    $persona = new Person($id, $nombre, $apellido);
    $personas[] = $persona;

    return $personas;
  }
  
}
