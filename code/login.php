<?php include'functions.php';
$conn = OpenCon();
// CloseCon($conn);
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

    <!--Structure to insert logo @tijani abdellatif-->
     <div class="container_logo">
        <!--site body-->
                <div class="logo">
                    <a href="">
                        <img src="logo1.png" alt="logo" class="rounded">
                    </a>
                    </div>
     </div>
              
                
    <!-- first page -->
    <div class="container_logo">
    
    <header>
        <h1>Welcome TM Great</h1>
        
            <div class="container">
            
            <form action="login.php" method="post">
                <h2>Login </h2>
                
                <div class="Login">
                <div class="lm">
                  <label for="uname"><b>Email: </b></label>
                  <input type="email" placeholder="Email" name="uname" required>
              
                  <label for="psw"><b>Password:</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
              
                  <button class="btn1" name="login" type="submit">Login</button>
                  <label class="btn2">
                    <input  type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                 </div>
                </div>
             
              </form> 
              <hr>
       
        <div class="welcome">
            <h2>Welcome sub_title </h2>
            <div class="txt">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Impedit, quos ipsam similique nobis quibusdam temporibus<br>
                    numquam repudiandae eligendi possimus, exercitationem ea<br>
                    suscipit distinctio cum molestiae qui! Maiores earum dolores qui<br>
                </p>
                <button class="btn2" name="login" type="button" class="cancelbtn"> < Read more</button>
            </div>
        </div>

        </div> 
    </div>
    </header>   
     <!--end  -->

     <?php
     $msg = '';
     
     if (isset($_POST['login']) ) 
        {
         
        if ($_POST['uname'] == 'tutorialspoint@gmail.com' && 
           $_POST['psw'] == '1234') {
           $_SESSION['valid'] = true;
           $_SESSION['timeout'] = time();
           $_SESSION['uname'] = 'tutorialspoint';
           
           echo 'You have entered valid use name and password';
        }else {
           $msg = 'Wrong email or password';
        }
     }
    ?>
</body>
</html>