<?php

// Check the person is logged in!
session_start();    
if (isset($_SESSION['patientAppID']))
{
    $user_id = $_SESSION['patientAppID'];
    $daysRemaining = $_SESSION['daysRemaining'];
    //If logged in, go to the HTML page:
}
else
{
header('Location: https://3yp.villocq.com/patient'); 
}
?>

<html>
<head> 
<title>Cardiac Track App</title>
<link rel="stylesheet" type="text/css" href="Cardiac_Track_Style.css">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=0.95; user-scalable=0;">
</head>

<body >
<div class="main_page">

<div id="title_menu">
Cardiac Track
</div>

<div class="page_header" style="positon:relative; top:87px;">
<a href="menu.php">
<img src="menu_button.png" style="float:left" height="36px" >
</a>
Update
</div>

<div style="color=red"> <!--dont remove this div it keeps everything in the right place--> 
.
</div>

<div id="result_pending">
Thank you for submitting your BP reading today.<br> You have <?php echo $daysRemaining ?> days left until your <br>next review.
</div>


<body>

</html>