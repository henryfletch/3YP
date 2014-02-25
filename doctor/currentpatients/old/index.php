<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=0.95; user-scalable=0;">
<title>Cardiac Track Professional</title>
<link rel="stylesheet" type="text/css" href="Pro_Login.css">

<script type="text/javascript">
function submitform()
{
document.forms["jsform"].submit();
}
</script>

<link rel="apple-touch-icon" href="/iphone_icon.png"/>
</head>

<body>
<div class="pro_login_page">

<div class="all_login">
<div id="heartlogo">
<img src="love-heart.png" width="158px" height="144px">
</div>

<div id="title">
Cardiac Track
</div>
<div id="pro">
Pro
</div>
<div id="details_box">
<form id="jsform" action="login.php" method="post">
<table id="login_table">
		<tbody>
		<tr>
		<td id="id" style="border-bottom: white solid 4px;"><input type="text" name="username" placeholder="Username" required> </td>
		</tr>
		<tr>
		<td id="password" style="border-bottom: white solid 4px;"> <input type="Password" name="password" placeholder="Password" required></td>
		</tr>
		<tr>
		<td id="sign_in">
		<a href="javascript: submitform()" style="text-decoration:none; color:white"/> Sign in</td>
		</tr>
		<tr>
		<td> <!-- This might need changing. At the moment this appears inside the submit button! -->
		<?php
		session_start();
		echo $_SESSION['loginMessage'];
		?>
		</td>
		</tr>
		</tbody>
</table>
</form>
</div> 
</div>
</body>

</html>
