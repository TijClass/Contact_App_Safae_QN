<?php include'functions.php';
session_start();
if(!isset($_SESSION["user"])){
  header("location: login.php");
}

?>
 <?php 
    if(isset($_POST['send'])){
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['Adress']) && !empty($_POST['Phone']) && !empty($_POST['email']) && !empty($_POST['unit']) && !empty($_POST['area'])) {
                 $first_name = $_POST['fname'];
                  $last_name = $_POST['lname'];
                  $address1 = $_POST['Adress'];
                  $phone = $_POST['Phone'];
                  $email = $_POST['email'];
                  $group = $_POST['unit'];
                  $notes = $_POST['area'];
                if(mysqli_query($conn,"INSERT INTO contacts (`first_name`, `last_name`, `address1`, `phone`, `email`, `group`,`notes`)
                VALUES ('$first_name', '$last_name', '$address1', '$phone',' $email', '$group', '$notes')"))
                
              {
                echo "form is succesefully";
                header("reflech:2,url=contact.php");
              } else {
                echo "form not submitted";
              }
      }else{
        die('test');
      }
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylei.css" rel="stylesheet" type="text/css" />
    <title>TM Great</title>
</head>
<body>
    <div class="all">
    <div class="container_logo">
      <!--site body-->
              <div class="logo">
                  <a href="">
                      <img src="logo1.png" alt="logo" class="rounded">
                  </a>
                  </div>
     </div>
     <!-- logout  -->
    <div class="logout">
        
        <h1 class="title">My Web App</h1>
        <button class="btn4" type="submit" form="nameform" name="logout" value="Send"> < Logout</button>
    </div>
   
    <div class="listcont">
        <h3>Contact List</h3>
        <div class="addin">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input class="Search" type="text" class="form-control" placeholder="Search">
        </div>
        <div >
            <button class="btn5" name="submit" value="send" type="submit" onclick="document.getElementById('id01').style.display='block'" class="button black">Add a Person</button>
        </div>
        </div>
    </div>
    
    <table >      
        <tr class="line1">
          <th>Id</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Email</th>
          <th>Adress</th>
          <th>Phone</th>
          <th>Groupe</th>
          <th>Actions</th>
        </tr>
        <?php
          $sql = "SELECT * FROM contacts";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {                          
        ?>
        <tr class="line1">
          <td><?=$row["id"]?></td>
          <td><?=$row["first_name"]?></td>
          <td><?=$row["last_name"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["address1"]?></td>
          <td><?=$row["group"]?></td>
          <td><?=$row["notes"]?></td>
          <td><span>Edit</span>|<span>Delete</span></td>
        </tr>
          <?php
          }
          }
          ?>
        
        <!-- <tr class="line2">
          <td>58011</td>
          <td>Anaa</td>
          <td>jennys</td>
          <td>Anaa@gmail.com</td>
          <td>Adress1 </td>
          <td>Phone1</td>
          <td>Familly</td>
          <td><a href="www.google.com">Edit <span class="drop">X</span></a></td>
          
        </tr>
        <tr class="line1">
          <td>58012</td>
          <td>Redy</td>
          <td>jennys</td>
          <td>Redy@gmail.com</td>
          <td>Adress2 </td>
          <td>Phone2</td>
          <td>Familly</td>
          <td><a href="www.google.com">Edit <span class="drop">X</span></a></td>
          
        </tr>
        <tr class="line2">
          <td>58013</td>
          <td>Sam</td>
          <td>jennys</td>
          <td>Sam@gmail.com</td>
          <td>Adress3 </td>
          <td>Phone3</td>
          <td>Familly</td>
          <td><a href="www.google.com">Edit <span class="drop">X</span></a></td>
          
        </tr>
        <tr class="line1">
          <td>58014</td>
          <td>Dina</td>
          <td>Bannet</td>
          <td>Dina@gmail.com</td>
          <td>Adress4 </td>
          <td>Phone4</td>
          <td>Friend</td>
          <td><a href="www.google.com">Edit <span class="drop">X</span></a></td>
          
        </tr>
        <tr class="line2">
          <td>58015</td>
          <td>Fred</td>
          <td>Donals</td>
          <td>Fred@gmail.com</td>
          <td>Adress5 </td>
          <td>Phone5</td>
          <td>Friend</td>
          <td><a href="www.google.com">Edit <span class="drop">X</span></a></td>
         
        </tr> -->
        <?php
        
    //   if(mysqli_query($conn, $sql)){
    //     echo "Table created successfully.";
    // } else{
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }
        ?>
     
      </table>
</div>
<div id="id01" class="modal" style="display: none;position: absolute; top: 0; left: 0; width: 80vw; height: 95vh; margin: 2.5vh 10vw;">
          <div class="modal-content">
            <div class="container3">
              <span onclick="document.getElementById('id01').style.display='none'" class="button display-topright">&times;</span>
              <div class="contact">
        <!-- <div class="add">
        <input type="text" id="fname" name="fname" placeholder="Add a person">
    </div> -->
    <form method="POST" action="contact.php">
        <div class="formgroup">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
        </div>
        <div class="formgroup ">
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
        </div>
        <div class="formgroup ">
            <label for="lname">Adress:</label>
            <input type="text" id="lname" name="Adress" placeholder="Enter your Adress" required>
        </div><div class="formgroup one">
            <label for="lname">Phone:</label>
            <input type="number" id="Pname" name="Phone" placeholder="Enter your Phone Number" required>
        </div>
        <div class="formgroup ">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
            <div class="radios">
             <input type="radio" name="unit" value="Familly" required>Familly
             <input type="radio" name="unit" value="Friend" required>Friend
             <input type="radio" name="unit" value="Businness" required>Businness
            </div>
        <div class="formgroup ">
            <label for="lname">Notes:</label>
           <textarea  name="area" id="area" placeholder="Enter your Notes" required></textarea> 
        </div>
        
    <!-- </div> -->
        <div class="formgroup ">
            <input class="btn3" name="send" type="submit" value="Send"></input>
        </div>
            </div>
          </div>
        </div>
    </form>
    
</body>
</html>