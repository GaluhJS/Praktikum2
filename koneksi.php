<?php
class Database{
    var $host = "127.0.0.1";
    var $uname = "root";
    var $pass = "";
    var $db = "learn_pl2";
    var $connection;

    function Connect(){
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass, $this->db); 
        return $this->connection;
    }
}
    
?>
