<?php

interface Person_Interface
{
  public function mainPerson();
  public function insert();
  public function update();
  public function deleteP(): Bool;
  public function countPersons(): Int;
  public function selectP(): String;
  public function selectPersonById($id): String;
}
