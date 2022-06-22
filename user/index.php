<?php

class User{
    public $conn;

    public $table_name;


    public function _construct($conn){

        $this->conn = $conn;
        $this->table_name = "os_users";

        $statement = "CREATE TABLE IF NOT EXISTS {$this->table_name}(
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            userid VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            icon VARCHAR(255) NOT NULL,
            created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";


            if(!mysqli_query($this->conn,$statement)){
                die("Couldn't create table {$this->table_name}".mysqli_error($this->conn))
            }


    }

    public function adduser($user){
        $email = $user["email"];
        $password = $user["password"];
        $userid = $user["userid"];
        $username = $user["username"];
        $icon = $user["icon"];

        $statement = "INSERT INTO {$this->table_name} (email,username,userid,password,icon)VALUE('{$email}','{$username}','{$userid}','{$password}','{$icon}')";

        if(mysqli_query($this->conn,$statement)){
            return "success";
        }
        else{
            return "Couldn't add the user because : " mysqli_error($this->conn);
        }
    }

    public function getUserByEmail($email){
        $statement = "SELECT * FROM {$this->user_table} WHERE email = '{$email}'";
        return mysqli_query($this->conn,$statement);
    }



}
?>