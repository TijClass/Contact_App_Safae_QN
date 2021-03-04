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
 
 




// if(isset($_POST['send'])){
//     $first_name = $_POST['fname'];
//     $last_name = $_POST['lname'];
//     $address1 = $_POST['Adress'];
//     $phone = $_POST['Pname'];
//     $email = $_POST['email'];
//     $group = $_POST['group'];
//     $notes = $_POST['area'];
//     $query = "INSERT INTO `contacts`('first_name','last_name','address1','phone','email','group','notes')VALUE('$first_name','$last_name','$address1','$phone','$email','$group','$notes')";
//     mysqli_query($conn,$query);

// }

?>