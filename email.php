<?php
	$SenderName = "Benson Oodngo";
	$EmailFrom = "benodongo244@gmail.com";
	$ToEmail = "solomonggichuru@gmail.com";
	$MailHeader = 'From:'.$SenderName.'\r\n';
				  'Reply-To:'.$EmailFrom.'\r\n';
				  'X-Mailer:PHP/'.phpversion();
	$Subject = "TESTING PHP MAIL";
	$Message = "Hello there, you have recieved a test email from a PHP website";

	$send = mail($ToEmail, $Subject, $Message, $MailHeader);
		if ($send)
		    {
				echo "Message recieved";
			}	
?>