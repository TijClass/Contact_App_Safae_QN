


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM Great</title>
    <link href="stylei.css" rel="stylesheet" type="text/css" />
</head>
<body>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>

</body>
</html>
    <!-- third page -->
    <div class="container3">
        
        <button onclick="document.getElementById('id01').style.display='block'" class="button black">Add a person</button>
      
        <div id="id01" class="modal" style="display: none;position: absolute; top: 0; left: 0; width: 80vw; height: 95vh; margin: 2.5vh 10vw;">
          <div class="modal-content">
            <div class="container3">
              <span onclick="document.getElementById('id01').style.display='none'" class="button display-topright">&times;</span>
              <div class="contact">
        <div class="add">
        <input type="text" id="fname" name="fname" placeholder="Add a person">
    </div>
        <div class="formgroup">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name">
        </div>
        <div class="formgroup ">
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name">
        </div>
        <div class="formgroup ">
            <label for="lname">Adress:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your Adress">
        </div><div class="formgroup one">
            <label for="lname">Phone:</label>
            <input type="number" id="Pname" name="Pname" placeholder="Enter your Phone Number">
        </div>
        <div class="formgroup ">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
            <div class="radios">
             <input type="radio" name="unit" value="">Familly
             <input type="radio" name="unit" value="">Friend
            <input type="radio" name="unit" value="">Businness
            </div>
        <div class="formgroup ">
            <label for="lname">Notes:</label>
           <textarea  name="lname" id="lname" placeholder="Enter your Notes" ></textarea> 
        </div>
        
    </div>
        <div class="formgroup ">
            <button class="btn3" type="submit" form="nameform" value="Send">Submit</button>
        </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>