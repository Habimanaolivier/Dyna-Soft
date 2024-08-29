<?php

class Database {
    private $host = 'localhost'; 
    private $user = 'root';       
    private $password = '';      
    private $database = 'crud';    

    private $connection;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die('Connection Failed: ' . $this->connection->connect_error);
        }
    }

    public function insert($query) {
        if ($this->connection) {
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection) . __LINE__);
            return $result ? $result : false;
        } else {
            return false;
        }
    }


    public function select($query) {
        if ($this->connection) {
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection) . __LINE__);
            if(mysqli_num_rows($result)>0){
            return $result ? $result : false;}
        } else {
            return false;
        }
    }


    public function delete($query) {
        if ($this->connection) {
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection) . __LINE__);
            return $result ? $result : false;
        } else {
            return false;
        }
    }



    public function update($query) {
        if ($this->connection) {
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection) . __LINE__);
            return $result ? $result : false;
        } else {
            return false;
        }
    }

    public function escape_string($string) {
        return $this->connection->real_escape_string($string);
    }

    public function close() {
        $this->connection->close();
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>
