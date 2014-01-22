<?php

// enable sessions
session_start();

// Php code for a login form

// Configure the MySQL connection
$server="remote.villocq.com:3306";
$username="3yp";
$DBpassword="project";
$database="tallis";

$db = new mysqli($server,$username,$DBpassword,$database); // New MySQLi instance
if ($db->connect_error) {
  trigger_error('Database connection failed: '  . $db->connect_error, E_USER_ERROR);
}

//mysql_connect('remote.villocq.com:3306',$username,$DBpassword);
//@mysql_select_db($database) or die("Error! Something bad happened!");

//Assign the login form POST output to PHP variables
$id=$_POST['username'];
$input_password=$_POST['password'];

//Get and compare the hashed passwords
//$getPassword="SELECT patientPassword FROM patientTargetBP WHERE patientID=AES_ENCRYPT('$id','$input_password')";
//$actual_password_hash=mysql_result(mysql_query($getPassword),0);

$getHash = $db->prepare("SELECT patientPassword FROM patientTargetBP WHERE patientID=AES_ENCRYPT(?,?)");
if($getHash === false) {
  trigger_error('SQL Statement Error: ' . $db->error, E_USER_ERROR);
}

$getHash->bind_param('ss',$id,$input_password);
$getHash->execute();
$getHash->bind_result($actual_password_hash);
$getHash->fetch();


$input_password_hash = hash('sha512', $input_password);
if ($actual_password_hash == $input_password_hash)  
{
    $_SESSION['userID'] = $id;
    $_SESSION['userPassword'] = $input_password;  // We need to pass the raw text PW to the encryption function.
    $_SESSION['loginMessage'] = '';
    
header('Location: https://3yp.villocq.com/patient/menu.php'); 
}
else
{
    $_SESSION['loginMessage'] = 'Login Error';
    header('Location: https://3yp.villocq.com/patient'); 
}
mysql_close();
?>
    