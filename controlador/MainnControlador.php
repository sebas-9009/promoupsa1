<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$grupo = $_POST['grupo'];
$clave = $_POST['clave'];
$_SESSION['grupo'] = $grupo;
$_SESSION['clave'] = $clave;
require_once __DIR__.'/../modelo/Examen1Modelo.php';

$ObjEx1 = new Examen1Modelo();
$rows = $ObjEx1->validacion($nombre,$clave);
$rows2 = $ObjEx1->validacionnombre($nombre);


$fila = mysql_num_rows($rows);
$fila2 = mysql_num_rows($rows2);


if($_POST['promo']=='a' && $fila>0)//validacion de contraseña y usuario
{
    require_once __DIR__. '/../vista/Examen1form1.php';
} else {
    if ($fila2>0) {   // validacion solo del nombre si existe que vuelva a la pagina de inicio por que ya existe ese usuario 
       header("locatio:/../vista/mainn.html");
      }else{    // caso contrario que ingrese un nuevo grupo en la base de datos 
          $ObjEx1->setNombre($grupo);
          $ObjEx1->setRespuesta1($clave);
          $ObjEx1->adicionar();
          require_once __DIR__. '/../vista/Examen1form1.php';
      }
  
    }

  if($_POST['promo']=='b')
  {
      require_once __DIR__. '/../vista/Examen2form.php';
  }else {


   
  }
   if($_POST['promo']=='c')
    {
      require_once __DIR__. '/../vista/Examen3form.php';
    }else{

    }
     










/*if(isset($_POST['btn_examen1']))
{
    require_once __DIR__. '/../vista/Examen1form.php';

}
if(isset($_POST['btn_examen2']))
{
    require_once __DIR__. '/../vista/Examen2form.php';
}
if(isset($_POST['btn_examen3']))
{
    require_once __DIR__. '/../vista/Examen3form.php';
}*/
