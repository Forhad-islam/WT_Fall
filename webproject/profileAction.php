<?php
 $userErrorr = "";
 $UserPass = "";
 $message= "";

 session_start();

 $fail="";
 $existingdata = file_get_contents('AdminData.json');
 $jsondata = json_decode($existingdata);

 if(isset($_REQUEST['Submit']))
 {
        if(empty($_POST['Checkname']) || empty($_POST['CheckPassword']))
        {
            $userErrorr = "*"; $UserPass = "*";
        }
        else
        {
            foreach ($jsondata as $key => $newdata) 
            {
            if ($newdata->Name == $_POST["Checkname"] && $newdata->Password == $_POST["CheckPassword"])
            {
                $_SESSION["Name"] = $newdata->Name;
                $_SESSION["Email"] =$newdata->Email;
                $_SESSION["Number"] =$newdata->Number;
                $_SESSION["DOB"] = $newdata->DOB;
                $_SESSION["NomineeName"] =$newdata->Nominee_Name;
                $_SESSION["NomineeAge"] =$newdata->Nominee_Age;
                $_SESSION["Relation"] =$newdata->Relation_with_User;
                $_SESSION["Tin"] = $newdata->Tin_Number;
                header("location: ../view/ProfileShow.php");
            } 
            else
            $message= "Invalid user name or password";
            }
        }
        
 }

  

?>