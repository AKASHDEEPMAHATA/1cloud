<?php

class Config{
    public $conn;

    public $username;
    public $password;
    public $host;
    public $db_name;


    public function _construct{
        $username = "root";
        $password = "";
        $host = "localhost";
        $db_name = "os_database;"
    }
    {
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
        $this->db_name = $db_name;

        $con = mysqli_connect($this->host,$this->username,$this->password);

        if($con){
        $statement = "CREATE DATABASE IF NOT EXISTS ($this->db_name)";
        }
        else{
            die("Couldn't establish a connection to the server");
        }
    }

}