<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
Class Db{

   private $link; 
   private $stmt;
   private $array;

   static $_instance;

   /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
   private function __construct(){
      $this->conectar();
   }

   /*Evitamos el clonaje del objeto. Patrón Singleton*/
   private function __clone(){ }

   /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   /*Realiza la conexión a la base de datos.*/
      public $username = 'u384523145_root';
      public $password = 'Proyecto1234';
      public $hostname = 'mysql.hostinger.es';
      public $database = 'u384523145_prpii';
      
      function __construct(argument)
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


   /*Método para ejecutar una sentencia sql*/
   public function ejecutar($sql){
      $this->stmt=mysql_query($sql,$this->link);
      return $this->stmt;
   }

   /*Método para obtener una fila de resultados de la sentencia sql*/
   public function obtener_fila($stmt,$fila){
      if ($fila==0){
         $this->array=mysql_fetch_array($stmt);
      }else{
         mysql_data_seek($stmt,$fila);
         $this->array=mysql_fetch_array($stmt);
      }
      return $this->array;
   }

   //Devuelve el último id del insert introducido
   public function lastID(){
      return mysql_insert_id($this->link);
   }

}
?>