<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarDB.php");//incluye una sola vez el contenido del archivo
class Examen1Modelo{
    private $idExamen1;
    private $nombre;
    private $respuesta1;
    private $respuesta2;
    private $respuesta3;
    private $respuesta4;
    private $respuesta5;
    private $nota;

    public function __construct($nom="",$r1="",$r2="",$r3="",$r4="",$r5="",$nt="")
    {
        $this->idExamen1 = 0;
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
    public function setIdExamen1($idEx1)
    {
        $this->idExamen1 = $idEx1;
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

    public function getIdExamen1()
    {
      return $this->idExamen1;
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
        $sql="SELECT * FROM examen1;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function obtenerNota($nombre)
    {
        $sql = "SELECT * FROM examen1 WHERE nombre='$nombre';";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
     public function validacion($nombre,$clave)
    {
        $sql = "SELECT * FROM examen1 WHERE nombre='$nombre'and respuesta1 = '$clave';";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
       public function validacionnombre($nombre)
    {
        $sql = "SELECT * FROM examen1 WHERE nombre='$nombre';";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }


    public function estadistica()
    {
        $sql="SELECT count(edad),AVG(edad) from cliente where edad <15;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function estadistica1()
    {
        $sql="SELECT count(edad),AVG(edad) from cliente where edad <45 and edad>15;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function estadistica2()
    {
        $sql="SELECT count(edad),AVG(edad) from cliente where edad < 45;";
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
            $sql = "INSERT INTO examen1(nombre, respuesta1, respuesta2, respuesta3, respuesta4, respuesta5, nota) VALUES(?,?,?,?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssssssi', $this->nombre, $this->respuesta1, $this->respuesta2, $this->respuesta3, $this->respuesta4, $this->respuesta5, $this->nota);
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
            $sql = "UPDATE cliente SET nombre = ?,nit=?,telefono=?,email=?,edad=? WHERE idcliente=?;";
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('ssssii',$this->nombre, $this->nit, $this->telefono, $this->email, $this->edad,$id);
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
    public function obtenerCliente($id=0)
    {
        $sql = "SELECT * FROM cliente WHERE idCliente=$id;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function borrarCliente($id=0)
    {
        $sql = "DELETE FROM cliente WHERE idcliente=?;";
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
    public function obtComboCliente()
    {
        $sql = "SELECT * FROM cliente;";
        $conexion = Conectar::conectarBD();
        $result = $conexion->query($sql);
        if($result->num_rows>0)
        {
            $combobit= "";
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
            $combobit .= "<option value='". $row['idCliente'] . "'>" . $row['idCliente'] . " " . $row['nombre'] . " " . $row['edad'] . "</option>";
            }
        }
        else
        {
            echo "No hubo resultados";
        }
        $conexion->close();
        return($combobit);




}
}
