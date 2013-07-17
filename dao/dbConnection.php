<?php

require_once 'config/cfServicoWeb.php';

class dbConnection extends cfServicoWeb {

    private $user = "root";
    private $pass = "root";
    private $host = "127.0.0.1";
    private $database = "dbservweb";

    private function Connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database", 
                                    $this->user, $this->pass, 
                                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $conn;
    }

    public function RunQuery($sql) {
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }

    public function RunSelect($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
