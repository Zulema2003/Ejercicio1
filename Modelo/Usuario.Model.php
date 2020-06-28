<?php
 class Usuarios
 { 
  public function BuscarUsuario($user,$pass)
  {
   $con=new Conexion();
   $query="";
   $resultado=$con->$query($q);
   return $resultado;
  }

 }
?>