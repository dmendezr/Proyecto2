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
}