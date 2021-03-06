<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarDB.php");//incluye una sola vez el contenido del archivo
class Examen1Modelo{
    private $idGrupo;
    private $grupo;
    private $examen1;
    private $examen2;
    private $examen3;
    private $examen4;


    public function __construct($gru="",$e1="",$e2="",$e3="",$e4="")
    {
        $this->idGrupo = 0;
        $this->grupo    = $gru;
        $this->examen1       = $e1;
        $this->examen2  = $e2;
        $this->examen3     = $e3;
        $this->examen4      = $e4;
    }
    public function __destruct()
    {

    }
    public function setIdGrupo($idGru)
    {
        $this->idGrupo = $idGru;
    }
    public function setGrupo($gru)
    {
        $this->grupo = $gru;
    }
    public function setExamen1($e1)
    {
        $this->examen1 = $e1;
    }
    public function setExamen2($e2)
    {
        $this->examen2 = $e2;
    }
    public function setExamen3($e3)
    {
        $this->examen3 = $e3;
    }
    public function setExamen4($e4)
    {
        $this->examen4 = $e4;
    }


    public function getIdGrupo()
    {
      return $this->idGrupo;
    }
    public function getGrupo()
    {
      return $this->grupo;
    }
    public function getExamen1()
    {
      return $this->examen1;
    }
    public function getExamen2()
    {
      return $this->examen2;
    }
    public function getExamen3()
    {
      return $this->examen3;
    }
    public function getExamen4()
    {
      return $this->examen4;
    }

    public function adicionarNombre()
    {
        $conexion = Conectar::conectarBD();
        if($conexion !=false)
        {
            $sql = "INSERT INTO examen(grupo) VALUES(?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('s', $this->grupo);
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


    public function obtenerTodos()
    {
        $sql="SELECT * FROM examen;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    public function obtenerNota($grupo)
    {
        $sql = "SELECT * FROM examen WHERE grupo='$grupo';";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
	    public function obtenerMejorNota1()
    {
        $sql = "SELECT grupo,examen1 FROM examen ORDER BY examen1 DESC LIMIT 3;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
	    public function obtenerMejorNota2()
    {
        $sql = "SELECT grupo,examen2 FROM examen ORDER BY examen2 DESC LIMIT 3;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
	    public function obtenerMejorNota3()
    {
        $sql = "SELECT grupo,examen3 FROM examen ORDER BY examen3 DESC LIMIT 3;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
	    public function obtenerMejorNota4()
    {
        $sql = "SELECT grupo,examen4 FROM examen ORDER BY examen4 DESC LIMIT 3;";
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
    public function modificarExamen1($examen1 , $grupo)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE examen SET examen1 = $examen1  WHERE grupo= '$grupo';";
            echo $sql;
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('is',$examen1 ,$grupo);
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

	public function modificarExamen2($examen2 , $grupo)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE examen SET examen2 = $examen2  WHERE grupo= '$grupo';";
            echo $sql;
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('is',$examen2 ,$grupo);
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
	public function modificarExamen3($examen3 , $grupo)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE examen SET examen3 = $examen3  WHERE grupo= '$grupo';";
            echo $sql;
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('is',$examen3 ,$grupo);
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
		public function modificarExamen4($examen4 , $grupo)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE examen SET examen4 = $examen4  WHERE grupo= '$grupo';";
            echo $sql;
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('is',$examen4 ,$grupo);
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
