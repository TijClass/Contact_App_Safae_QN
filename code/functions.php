<?php
 $dbhost = "localhost";//network adress 
 $dbuser = "root";
 $dbpass = "";
 $db = "connt"; 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);


 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  if($conn){
//      echo "connected";
//  }else{
//      echo "no connected";
//  }
 
 






?>