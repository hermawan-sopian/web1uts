<?php
require 'koneksi.php';
$username = $_POST["username"]; 
$password = $_POST["password"]; 

$sql = "Select * from uhuy where username='$username' AND password = '$password'";
$result = mysqli_query($conn, $sql); 

$num = mysqli_num_rows($result);
if($num == 0) { 
    header("Location: main.php");
        
        $result = mysqli_query($conn, $sql); 

        if ($result) { 
            $showAlert = true;  
        } 
    }  
    else {  
        $showError = "Passwords do not match";  
    }       
// end if  

if($num>0)  
{ 
  $exists="Username not available";  
}  

?>