<?php
  include ('profileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body align="center"> 
<br><br>
     <h1><u>MotorHub Store </u> </h1>  
   <br>
   
   <form action=""  method="POST" enctype="multipart/form-data" >

   <table align="center" border="1" cellpadding="5 frame="Box" rules="none" >
         <tr>
            <td>
                  <b> User Name:-  </b>
            </td>
            <td>
                <input type="text" id="Checkname" name="Checkname" value="" size="50" placeholder="Username">
            
            </td>
            <td><span style="color: red;"> <?php  echo $userErrorr; ?> </span>
         </tr>
         <br>
            <tr>
                <td>
                    <b> Password:-  </b>
                </td>
                <td>
                <input type="password" id="Checpassword" name="CheckPassword" value="" size="50" placeholder="Password">
                </td>
                <td><span style="color: red;"> <?php  echo $UserPass; ?> </span>
            </tr>
        
            <tr>
               <td>
            
               </td>
                
                <td>
                  <input type="submit" value="SignIn" id="signin" name="Submit" style="height:30px; width:200px" >
                  
                </td>

            </tr>
       </table>
   </form>
   <br>
   <?php echo $message ?>

</body>
</html>