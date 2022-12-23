<?php
//NB: This only only works while on a server and not on localhost.
if (isset($_POST['send'])) {
    // $to      = $_POST["email"];
    // $subject =  $_POST["subject"];
    // $message =  $_POST["message"];
    $headers = 'From: martinwainaina001@gmail.com'       . "\r\n" .
                 'Reply-To: martinwainaina001@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
                 
    //mail($to, $subject, $message, $headers);
    mail($_POST["email"], $_POST["subject"], $_POST["message"], $headers);
    echo "Email sent";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
	<form class="" action="#" method="post">
		Emai <input type="emai" name="email" value=""> <br>
		Subject <input type="text" name="subject" value=""> <br>
		Message <input type="text" name="message" value=""> <br>
		<button type="submit" name="send">Send</button>
		
	</form>
</body>
</html>