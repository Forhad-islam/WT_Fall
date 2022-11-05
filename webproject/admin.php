<?php
   include ('action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
</head>
<body align="center">
    <h1>Registration form </h1>
    <form action=""  method="POST" enctype="multipart/form-data" > 
          <table align="center"> 
        
               <tr>   
                <td> 
                      Name:
                      
                </td> 
                <td> <input type="text" id="fname" name="fname" value="" placeholder="name"> </td>

                     <td><span style="color: red;"> <?php  echo $Errorname; ?> </span>
                    </td>
                </tr> 
                   
               <tr>
                <td>
                      Email:      
                </td>
                <td> <input type="text" id="fmail" name="fmail" value="" placeholder="name@.com"> </td>
                
                       <td>  <span style="color: red;"> <?php  echo $Error1; ?> </span>
                    </td>
               </tr>
                <tr>
               <td>
                      Number:      
                </td>
                <td> <input type="Number" id="fnumber" name="fnumber" value="" placeholder="+8801..">  </td>
                 </tr>
               
                            <tr>
                                  <td>
                                        Gender:                                    
                                  </td>
                                  <td>
                                    <input type="radio" name="fgender">Male
                                    <input type="radio" name="fgender">Female
                                    
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $AdminAge ?> </span> </td>
                            </tr>
                <tr>
                    <td>Date Of Birth:</td> 
                     <td> <input type="date" id="fdate" name="fdate"> </td>
                     <td><span style="color: red;"> <?php  echo $ageError ?> </span> </td>
                </tr>    

                 <tr>
                    <td> <p><h4>Nominee Information</h3></p> </td>
                    <!--multiple table -->
                     <table align="center" border="1" cellpadding="10" frame="Box" rules="none">
                               <tr> <td>Nominee Name :</td>
                    <td> <input type="text" id="fnominee" name="fnominee" value="" placeholder="enter Nominee Name">
                     <span style="color: red;"> <?php  echo $Error ?> </span> </td></tr>
                     <tr>
                     <td>Nominee Age  :</td>
                           <td>
                           <input type="number" id="fnomineeage" name="fnomineeage" value="" placeholder="age">
                           <span style="color: red;"> <?php  echo $NomineeAgeError ?> </span>
                           </td>
                    </tr>
                         <tr> 
                           <td>
                                        Gender:                                    
                                  </td>
                                  <td>
                                    <input type="radio" name="nomineegender">Male <br>
                                    <input type="radio" name="nomineegender">Female
                                    
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $NomineeGenderError ?> </span></td>
                        </tr>
                     
                        <tr>
                       
                             <td> Relation with Admin :  </td>
                                   <td>
                                   <select id="nomineeRelation" name="nomineeRelation">
                                    <option value="Son">Son</option>
                                     <option value="Doughter">Doughter</option>
                                      <option value="Brother">Brother</option>
                                          <option value="Sister">Sister</option>
                                     </select>
                                     
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $NomineeRelationError ?> </span>  </td>
                             
                        </tr>
                     </table>
                     <br>
                 </tr>  

            
               
              
                <tr>
                    <td>
                             TIN Number:
                    </td>
                    <td>
                    <input type="number" name="tinnumber" placeholder="TIN Number" min="100000" max="999999" >
                    </td>
                         <td>
                         <span style="color: red;"> <?php  echo $TINvalid ?> </span>
                         </td>
                </tr>
               
                 <br><br>

                <tr>
                    <td>Pasword:</td>
                    <td> <input type="password" id="fpass" name="fpass" value="" placeholder="Password"> </td>
                    
                </tr>

                
                <tr>
                    <td>Confirm Pasword:</td>
                    <td> <input type="password" id="fCpass" name="fCpass" value="" placeholder="Confirm Password">
                    <br>  <span style="color: red;"> <?php  echo $passError ?> </span>     
                </td>
                </tr>
               
                <br><br>
                
                <tr>
                    <td>
                        Select Image
                    </td>
                    <td>
                    <input type="file" id="files" name="files">
                    </td>
                    <br>
                    <td>
                    <span style="color: red;"> <?php  echo $filesErrors ?> </span>
                    </td>
                </tr>

                 
         
        </table>
        <br><br>
         <input type="submit" id="frmsubmit" name="submit" style="height:30px; width:80px"  >

    </form>
      <br><br>
      <a href="Profile.php">
    <input type="submit" value="LOGIN" id="login" name="login" style="height:30px; width:100px"  >
      </a>
</body>
</html>