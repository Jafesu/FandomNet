<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="P@ssw0rd"; // Mysql password 
$db_name="FandomNet"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
$conn = new mysqli($host, $username, $password, $db_name);

//Check Connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// username and password sent from form 
$myemail=$_POST['email']; 
$mypassword=$_POST['password']; 

if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Please Enter Valid email.')
    location.href = 'index.php'
    document.getElementById('email').focus();</script>";
    
    
    //header( 'Location: index.php' ) ;
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myemail);
$mypassword = stripslashes($mypassword);/*
$myusername = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);*/
$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result = $conn->query($query);

// If result matched $myusername and $mypassword, table row must be 1 row
if ($result->num_rows == 1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myemail");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "incorrect email or Password";
}
?>