<!DOCTYPE html>
<head>
    <title>Contact</title>
	<link type="text/css" rel="stylesheet" href="../css/css.css">
</head>
<body>
	<div id="container">

	<?php
		include '../php/navbar.php';
	?>
	<form action="mail.php" method="POST">
		<p>Please fill out this form to get in contact with Jillian Solomon's agent.  If you would like Jillian to model for you, please include details of the event in your message. </p>
		<p>NAME:</p> <input type="text" name="name">
		<br/>
		<p>EMAIL:</p> <input type="text" name="email">
		<br/>
		<!--<p>Purpose:</p> <textarea name="purpose" rows="5" cols="40"></textarea>-->
		<p>MESSAGE:</p> <textarea name="message" rows="5" cols="40"></textarea>
		<br/><br/>
		<input type="submit" value="SUBMIT"> 
	</form>
	</div><!--end container id div-->
	<?php
	include '../php/citation.php'
	?>
</body>