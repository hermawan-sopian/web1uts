<?php 

$showAlert = false;  
$showError = false;  
$exists=false; 
    
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the 
     
    include 'main.php';    
    
    $username = $_POST["username"];  
    $email = $_POST["email"];  
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"]; 
            
    
    $sql = "Select * from uhuy where username='$username'"; 
    
    $result = mysqli_query($conn, $sql); 
    
    $num = mysqli_num_rows($result);
      
    
    
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 0) { 
        if(($password == $cpassword) && $exists==false) { 
    
            $hash = password_hash($password,  
                                PASSWORD_DEFAULT); 
                
            // Password Hashing is used here.  
            $sql = "INSERT INTO `uhuy` ( `username`,  
                `email`, `password`) VALUES ('$username','$email', '$hash')"; 
    
            $result = mysqli_query($conn, $sql); 
    
            if ($result) { 
                $showAlert = true;  
            } 
        }  
        else {  
            $showError = "Passwords do not match";  
        }       
    }// end if  
    
   if($num>0)  
   { 
      $exists="Username not available";  
   }  
    
}//end if    
    
?> 