<?php


$servername = "localhost";  
$username = "root";  
$password = ""; 

$database = "test";
$conn = mysqli_connect($servername,  $username, $password, $database);
if($conn) { 
    echo "success";  
}  
else { 
    die("Error". mysqli_connect_error());  
}  
// session start logout 
session_start();

//uji session telah logout tidak bisa back to halaman 
if (
    empty($_SESSION['username']) 
    or empty($_SESSION['password'])
    or empty($_SESSION['nama_pengguna'])
){

    echo '<script type="text/javascript">'; 
    echo 'alert("review your answer")'; 
    echo 'document.location= "main.php"';
    echo '</script>';}

?>
