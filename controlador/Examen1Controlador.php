<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$idExamen1 = $_POST['idExamen1'];
//$nombre    = $_POST['nombre'];
$respuesta1       = $_POST['resp1'];
$respuesta2  = $_POST['resp2'];
$respuesta3     = $_POST['resp3'];
$respuesta4      = $_POST['resp4'];
$respuesta5      = $_POST['resp5'];
require_once __DIR__.'/../modelo/Examen1Modelo.php';
$ObjEx1 = new Examen1Modelo();

if(isset($_POST['btn_enviar']))
{
   

        $nota = 0;
        if($respuesta1 == 'a')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta1($respuesta1);
        }else {
          $ObjEx1->setRespuesta1($respuesta1);
        }
        if($respuesta2 == 'a')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta2($respuesta2);
        }
        else {
          $ObjEx1->setRespuesta2($respuesta2);
        }
        if($respuesta3 == 'a')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta3($respuesta3);
        }
        else {
          $ObjEx1->setRespuesta3($respuesta3);
        }
        if($respuesta4 == 'a')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta4($respuesta4);
        }else {
          $ObjEx1->setRespuesta4($respuesta4);
        }
        if($respuesta5 == '2')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta5($respuesta5);
        }else {
          $ObjEx1->setRespuesta5($respuesta5);
        }

        $ObjEx1->setNombre($_SESSION['grupo']);
        $ObjEx1->setNota($nota);
        $ObjEx1->adicionar();
echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "  <head>\n";
echo "      <meta charset=\"utf-8\">\n";
echo "      <title>PROMO UPSA</title>\n";
echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "      <meta name=\"author\" content=\"colorlib.com\">\n";
echo "      <style>\n";
echo "      .button {\n";
echo "      background-color: #FFBF00; \n";
echo "      border: none;\n";
echo "      color: white;\n";
echo "      font-weight: bold;\n";
echo "      padding: 20px;\n";
echo "      text-align: center;\n";
echo "      text-decoration: none;\n";
echo "      display: inline-block;\n";
echo "      font-size: 15px;\n";
echo "      margin: 4px 2px;\n";
echo "      cursor: pointer;\n";
echo "      }\n";
echo "      .button1 {border-radius: 2px;}\n";
echo "      .button2 {border-radius: 4px;}\n";
echo "      .button3 {border-radius: 8px;}\n";
echo "      .button4 {border-radius: 40px;}\n";
echo "      .button5 {border-radius: 50%;}\n";
echo "      .p{\n";
echo "       margin: 1rem;\n";
echo "       padding: 1rem;\n";
echo "       border: 2px ;\n";
echo "       /* IMPORTANTE */\n";
echo "       text-align: center;";
echo "      font-weight:bold;\n";
echo "      font-size: 30px;\n";
echo "      }\n";
echo "      </style>";
echo "      \n";
echo "      <!-- MATERIAL DESIGN ICONIC FONT -->\n";
echo "      <link rel=\"stylesheet\" href=\"fonts/material-design-iconic-font/css/material-design-iconic-font.css\">\n";
echo "\n";
echo "      <!-- STYLE CSS -->\n";
echo "      <link rel=\"stylesheet\" href=\"css/style.css\">\n";
echo "  </head>\n";
echo "<body>\n";
echo "      <div class=\"wrapper\">\n";
echo "          <div class=\"image-holder\">\n";
echo "              <img src=\"images/logo.png\" alt=\"\">\n";
echo "          </div>\n";
echo "            <form action=\"Examen1Controlador1.php\" method=\"POST\">\n";
echo "              <div class=\"form-header\">\n";
echo "                  <a href=\"#\">#Promo UPSA cuestionario online</a>\n";
echo "                  <h3>Carrera de Ingenieria Informática y/o de Sistemas</h3>\n";
echo "                  <h3>Nombre del Grupo : ".$_SESSION['grupo']."</h3>\n";
echo "              </div>\n";
echo "              <div id=\"wizard\">\n";
echo "                  <div class=\"p\">\n";
echo "                  <h1>Nota:</h1>\n";
echo "                  <h1>$nota</h1>\n";
echo "                  <br>\n";
echo "                  <button class=\"button button4\" name=\"btn_mostrar\">Ver Notas</button>";
echo "                  </div>\n";
echo "              </div>\n";
echo "            </form>\n";
echo "      </div>\n";
echo "\n";
echo "      \n";
echo "</body>";

echo "</html>";


}


/*function mostrar1($menor="",$entre="",$mayor="")
{
    $men=$menor->fetch_row();
    $ent=$entre->fetch_row();
    $may=$mayor->fetch_row();
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica</caption>";
    echo "<tr>";
    echo "<th>Categoria</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Promedio Edad</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."MENORES A 15 AÑOS"."</td>";
    echo "<td>".$men[0]."</td>";
    echo "<td>".$men[1]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."ENTRE 15 y 45 AÑOS"."</td>";
    echo "<td>".$ent[0]."</td>";
    echo "<td>".$ent[1]."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>"."MAYORES A 45 AÑOS"."</td>";
    echo "<td>".$may[0]."</td>";
    echo "<td>".$may[1]."</td>";
    echo "</tr>";

    echo "</table>";
}

function mostrar2($rows="")
{
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica</caption>";
    echo "<tr>";
    echo "<th>Categoria</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Promedio Edad</th>";
    echo "</tr>";

    $edad1 = 0;
    $edad2 = 0;
    $edad3 = 0;
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    while ($fila = $rows->fetch_row())
    {
        $edad = $fila[5];
        if($edad<15)
        {
            $edad1++;
            $cont1 = $edad + $cont1;
            $prom1 = $cont1/$edad1;
        }

        if($edad>14 && $edad<36)
        {
            $edad2++;
            $cont2 = $edad + $cont2;
            $prom2 = $cont2/$edad2;
        }

        if($edad>34)
        {
            $edad3++;
            $cont3 = $edad + $cont3;
            $prom3 = $cont3/$edad3;
        }
    }



    echo "<tr>";
    echo "<td>"."MENORES A 15 AÑOS"."</td>";
    echo "<td>".$edad1."</td>";
    echo "<td>".intval($prom1)."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."ENTRE 15 y 35 AÑOS"."</td>";
    echo "<td>".$edad2."</td>";
    echo "<td>".intval($prom2)."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>"."MAYORES A 35 AÑOS"."</td>";
    echo "<td>".$edad3."</td>";
    echo "<td>".intval($prom3)."</td>";
    echo "</tr>";

    echo "</table>";
}*/


/*if(isset($_POST['btn_modificar']))
{
    echo "<br>Presiono el boton modificar";
    if($idCliente==0)
    {
        echo "<br>Debe introducir idCliente.. NO SE MODIFICO";

    }
    else
    {
        echo "<br>Se modifico exitosamente!";
        $ObjCli->setNombre($nombre);
        $ObjCli->setNit($nit);
        $ObjCli->setTelefono($telefono);
        $ObjCli->setEmail($email);
        $ObjCli->setEdad($edad);
        $ObjCli->modificar($idCliente);
    }
}
if(isset($_POST['btn_buscar']))
{
    if($idCliente == 0)
    {
        echo "<br>Debe introducir idCliente a buscar";
    }
    else
    {
        $rows = $ObjCli->obtenerCliente($idCliente);
        mostrar($rows);
    }
}
if(isset($_POST['btn_borrar']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarCliente($idCliente);
} /*
/*if(isset($_POST['btn_estadistica']))
{


   mostrar1($ObjCli->estadistica(), $ObjCli->estadistica1(),$ObjCli->estadistica2());




    if(isset($_POST['btn_estadistica']))
{


   mostrar2($ObjCli->obtenerTodos());


 } */
