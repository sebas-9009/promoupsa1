<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarDB.php");//incluye una sola vez el contenido del archivo
class Examen2Modelo{
  private $idExamen2;
  private $nombre;
  private $respuesta1;
  private $respuesta2;
  private $respuesta3;
  private $respuesta4;
  private $respuesta5;
  private $nota;

  public function __construct($nom="",$r1="",$r2="",$r3="",$r4="",$r5="",$nt="")
  {
      $this->idExamen2 = 0;
      $this->nombre    = $nom;
      $this->respuesta1       = $r1;
      $this->respuesta2  = $r2;
      $this->respuesta3     = $r3;
      $this->respuesta4      = $r4;
      $this->respuesta5      = $r5;
      $this->nota      = $nt;
  }
  public function __destruct()
  {

  }
  public function setIdExamen2($idEx2)
  {
      $this->idExamen2 = $idEx2;
  }
  public function setNombre($nom)
  {
      $this->nombre = $nom;
  }
  public function setRespuesta1($r1)
  {
      $this->respuesta1 = $r1;
  }
  public function setRespuesta2($r2)
  {
      $this->respuesta2 = $r2;
  }
  public function setRespuesta3($r3)
  {
      $this->respuesta3 = $r3;
  }
  public function setRespuesta4($r4)
  {
      $this->respuesta4 = $r4;
  }
  public function setRespuesta5($r5)
  {
      $this->respuesta5 = $r5;
  }
  public function setNota($nt)
  {
      $this->nota = $nt;
  }

  public function getIdExamen2()
  {
    return $this->idExamen2;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getRespuesta1()
  {
    return $this->respuesta1;
  }
  public function getRespuesta2()
  {
    return $this->respuesta2;
  }
  public function getRespuesta3()
  {
    return $this->respuesta3;
  }
  public function getRespuesta4()
  {
    return $this->respuesta4;
  }
  public function getRespuesta5()
  {
    return $this->respuesta5;
  }
  public function getNota()
  {
    return $this->nota;
  }

    public function obtenerTodos()
    {
        $sql="SELECT * FROM examen2;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function adicionar()
    {
        $conexion = Conectar::conectarBD();
        if($conexion !=false)
        {
            $sql = "INSERT INTO producto(nombre, stock, costo, precio) VALUES(?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssss', $this->nombre, $this->stock, $this->costo, $this->precio);
            if($stmt->execute())
            {
                return(true);

            }
            else
            {
                return(false);
            }
            $conexion->close();
        }
    }
    public function modificar($id=0)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE producto SET nombre = ?,stock=?,costo=?,precio=? WHERE idproducto=?;";
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('siiii',$this->nombre, $this->stock, $this->costo, $this->precio,$id);
            if($stmt->execute())
            {
                $conexion->close();
                return (true);

            }
            else
            {
                $conexion->close();
                return (false);
            }

        }

    }
    public function obtenerProducto($id=0)
    {
        $sql = "SELECT * FROM producto WHERE idProducto=$id;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function borrarProducto($id=0)
    {
        $sql = "DELETE FROM producto WHERE idproducto=?;";
        $conexion = Conectar::conectarBD();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s',$id);
        if($stmt->execute())
        {
            $conexion->close();
            return 1;
        }
        else
        {
            $conexion->close();
            return -1;
        }
    }




}
