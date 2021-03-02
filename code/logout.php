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
        <button class="btn4" type="submit" form="nameform" value="Send"> < Logout</button>
    </div>
   
    <div class="listcont">
        <h3>Contact List</h3>
        <div class="addin">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input class="Search" type="text" class="form-control" placeholder="Search">
        </div>
        <div >
            <button class="btn5" name="submit" value="send" type="submit">Add a Person</button>
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
        <tr class="line2">
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
         
        </tr>
       
      </table>
</div>

      <?php
      
      if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['submit']);
        header('login.php');
    }
    ?>
    
</body>
</html>