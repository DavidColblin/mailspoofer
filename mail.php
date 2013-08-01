<?php 

	//Mail Variables
		$mailTo = urldecode($_POST['mailTo']);
		$mailSubject = $_POST['mailSubject'];
		$mailMessage = $_POST['mailMessage'];
		$mailFrom = "From: " . urldecode($_POST['mailFrom']);
		
	
	//Send mail
		if( mail($mailTo, $mailSubject , $mailMessage, $mailFrom))
			echo "sent";
		else
			echo "unsent";
		

		
?>
