<?php
 /**

 * Clase Home que permite la primera carga del sistema
 */

 class Home
 {

  function _construct()
  {
   //code...
  }

  public function Inicio()// metodo = action
  {
   $smarty=new Smarty();
   $smarty->display('Default.tpl');
  }

  public function Fun2()
  {
   $model=new Usuarios();

   $consulta=$model->BuscarUsuario("user", 1234);
   
   var_dump($consulta);
   //echo "En controlador Home y metodo Fun2";
  
  }

 }


?>