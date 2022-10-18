<?php 
    $Error = "";
    $Error1 = "";
     

       if(isset($_REQUEST['submit']))
       {
          $username = $_REQUEST['fname'];
          $usermail = $_REQUEST['fmail'];
          $password = $_REQUEST['fpass'];
          $Cpassword = $_REQUEST['fCpass'];
        
          if(empty($_POST['fname']))
            {
                $Error = "Enter the name";
            }
            else
            {
                if(!preg_match( '/^[a-zA-Z\s]+$/' ,$username))
                {
                     $Error = "Please input valid name";
                }
            }

            if(empty($_POST['fmail']))
            {
                $Error1 = "Enter the email";
            }
            else
            {
                if (filter_var($_POST['fmail'], FILTER_VALIDATE_EMAIL)) {
                    $Error1="ok";
                } else {
                     $Error1 = "it's not a valid email address";
                }
            }

            
            


  
       }

?>