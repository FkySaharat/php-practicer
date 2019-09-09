<?php

class Connection{
    public static function connect(){
        try{
            return new PDO('mysql:host=localhost;port=3306;dbname=mytodo','admin','adminpassword');
        }catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die('Could not connect');
        }
    }
}


/*
$con = mysqli_connect("localhost","admin","adminpassword","mytodo","3306");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
*/
//phpinfo();