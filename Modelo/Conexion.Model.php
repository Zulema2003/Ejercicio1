<?php
 /**
 *
 */
 class Conexion extends mysqli
 {
  function _construct()
  {
   //code...
   $server"localhost";
   $pass="";
   $user="root";
   $base="framework";

   parent::_construct($server,$user,$pass,$base);
   $this->query("SET NAMES'UTF8';");
   $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ". $base;
   echo $error;
   unset ($error);
  }
 
 }

?>