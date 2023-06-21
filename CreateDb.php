<?php

class CreateDb{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;
    
    public function __construct(
        $dbname = "NewDB",
        $tablename = "Producdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if(!$this->con){
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "CREATE TABLE IF NOT EXISTS $tablename (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(100)
            );";
            
            if(mysqli_query($this->con, $sql)){
                echo "Table created successfully.";
            } else {
                echo "Error creating table: " . mysqli_error($this->con);
            }
        }
        
        mysqli_close($this->con);
    }

    public function getData(){
        $sql = "SELECT*FORM $this->tablename";

        $result = mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}

?>
