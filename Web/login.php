<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="P@ssw0rd"; // Mysql password 
$db_name="FandomNet"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myemail=$_POST['email']; 
$mypassword=$_POST['password']; 

if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) {
    alert("Please Enter Valid email.");
    header("index.php");
    die;
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myemail");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "incorrect email or Password";
}
?>