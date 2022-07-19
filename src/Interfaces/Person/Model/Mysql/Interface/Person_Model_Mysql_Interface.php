<?php

interface Person_Model_Mysql_Interface extends Person_Interface
{
  public function insertPrepared();
  public function updatePrepared();
  public function deletePrepared();
}
