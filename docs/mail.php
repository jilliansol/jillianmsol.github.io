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
    
    <div class="mailmessage">
    <?php
		$name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $formcontent = "From: $name  \n $message";
        $recipient = "jms865@cornell.edu";
        $subject = "Contact from $name";
        echo "Thanks!  Please review your message below.  If you would like to change anything, please send another message.";
		echo "Name: $name" ;
		echo "Email Address: $email";
		echo "Message: $message";
    ?>
    </div><!--end mail message div-->
	</div><!--end container div-->


</body>
    
    