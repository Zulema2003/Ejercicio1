<?php
/**
*Clase librerias se cargaron funcionalidades varias del proyecto
*/
class ClassName
{
 function _construct()
 {
  ...code
 }
 public function DatosSmarty($consulta)
 { 
  $ar=array();
  while($row=mysqli_ftech_assoc($consulta))
  { 
   array_push($ar,$row);
  }
   return $ar
 }
  
  public function DatosRow($consulta)
  {
   $assoc_arr=mysqli_fetch_assoc($consulta);
   returnn $assoc_arr;
  }
}
?>