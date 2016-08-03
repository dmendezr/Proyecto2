<?php 
/**
* 
*/
class Persona extends Conectar
{
	
	function __construct()
	{
		# code...
	}

	public $resultado = array();

    public function getPersonas() {
        try {
            $sql = "SELECT * FROM persona";
            $query = mysqli_query(self::conectar(), $sql);
            $i = 0;
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado[$i] = $queryData;
                $i++;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getPersona($id) {
        try {
            $sql = "SELECT * FROM persona WHERE Cedula =" . $id;
            $query = mysqli_query(self::conectar(), $sql);
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getLogros() {
        try {
            $sql = "SELECT * FROM logros";
            $query = mysqli_query(self::conectar(), $sql);
            $i = 0;
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado[$i] = $queryData;
                $i++;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }


    public function getLogrosporID($id) {
        try {
            $sql = "SELECT * FROM logros where cedula = ".$id ;
            $query = mysqli_query(self::conectar(), $sql);
            $i = 0;
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado[$i] = $queryData;
                $i++;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getLogro($id) {
        try {
            $sql = "SELECT * FROM logros WHERE Cedula =" . $id;
            $query = mysqli_query(self::conectar(), $sql);
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getEscolaridades() {
        try {
            $sql = "SELECT * FROM escolaridad";
            $query = mysqli_query(self::conectar(), $sql);
            $i = 0;
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado[$i] = $queryData;
                $i++;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getEscolaridadporID($id) {
        try {
            $sql = "SELECT * FROM escolaridad where cedula = ".$id ;
            $query = mysqli_query(self::conectar(), $sql);
            $i = 0;
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado[$i] = $queryData;
                $i++;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getEscolaridad($id) {
        try {
            $sql = "SELECT * FROM escolaridad WHERE Cedula =" . $id;
            $query = mysqli_query(self::conectar(), $sql);
            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }


}