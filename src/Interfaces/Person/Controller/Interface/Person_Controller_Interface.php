<?php

interface Person_Controller_Interface extends Person_Interface
{
  public function dataModel(int $id=0, String $nombre ="", String $apellido = ""): Void ;
}
