<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
       <p><h1><b> <u>Welcome to MotorHub Store </u>  </b>  </h1></p>
       <table  border="1" cellpadding="10" frame="Box" rules="none">
        <tr>
            <td>
                Name: 
            </td>
            <td>
                <?php echo $_SESSION["Name"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: 
            </td>
            <td>
                <?php echo  $_SESSION["Email"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Number: 
            </td>
            <td>
                <?php echo $_SESSION["Number"] ?>
            </td>
        </tr>

        <tr>
            <td>
               Admin DOB: 
            </td>
            <td>
                <?php $_SESSION["DOB"]  ?>
            </td>
        </tr>

        <tr>
            <td>
                Nominee Name: 
            </td>
            <td>
                <?php echo $_SESSION["NomineeName"]?>
            </td>
        </tr>

        <tr>
            <td>
                Nomine Age: 
            </td>
            <td>
                <?php echo $_SESSION["NomineeAge"] ?>
            </td>
        </tr>

        <tr>
            <td>
                Relations with Nominee: 
            </td>
            <td>
                <?php echo $_SESSION["Relation"] ?>
            </td>
        </tr>

        <tr>
            <td>
                Tin Number: 
            </td>
            <td>
                <?php $_SESSION["Tin"] ?>
            </td>
        </tr>


       </table>

       <a href="/Profile.php"> LogOut </a>
</body>
</html>