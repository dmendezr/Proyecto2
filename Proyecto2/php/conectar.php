<?php
	/**
	* Prueba
     * Prueba2
     * Prueba3
	*/
	class Conectar
	{
		public $username = 'u384523145_root';
		public $password = 'Proyecto1234';
		public $hostname = 'localhost:3306';
		public $database = 'u384523145_prpii';
		
		
		function __construct()
		{

		}

		public function getUsername() {
			return $this->username;
		}

		public function getPassword() {
			return $this->password;
		}

		public function getHostname() {
			return $this->hostname;
		}

		public function getDatabase() {
			return $this->database;
		}

		public function conectar() {
			try{
				$conexion = mysqli_connect(
					$this->getHostname(),
					$this->getUsername(),
					$this->getPassword(),
					$this->getDatabase()
				);

				if (mysqli_connect_errno()) { 
					throw new Exception("Falló la conexión: %s\n", mysqli_connect_error());
    			}

				return $conexion;
			} catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
		}

	}