<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    private $port;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'desarrolloWeb';
        $this->user     = 'katherine';
        $this->password = "123456";
        $this->charset  = 'utf8mb4';
        $this->port     = 3307;
    }

    function connect(){
        try{
            // Asegúrate de incluir el puerto en la cadena de conexión
            $connection = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}

?>
