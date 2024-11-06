<?php
class db {
    private $host = "localhost";
    private $dbname = "PROEYCTO_POO";  
    private $user = "Parzi";           
    private $password = "123";        

    public function conexion() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $PDO = new PDO($dsn, $this->user, $this->password);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $PDO;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
