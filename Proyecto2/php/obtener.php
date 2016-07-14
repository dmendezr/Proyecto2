<?php 
/**
* 
*/
class Cliente extends Conectar
{
	
	function __construct()
	{
		# code...
	}

	public $resultado = array();

    public function getCliente() {
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
}