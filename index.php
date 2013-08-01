<!DOCTYPE html>
<html>
	<head>
		<style>
			p {
				display: block;
			}
			
			input,textarea{
				float:right;
			}
			
			form {
				width: 250px
			}
			
		</style>
	</head>
	<body>
	 <b> March 2012 edit: Did not work, seems installing SendMail solved the issue, else, see more SMTP configurations (stmp address, login, password, port) </b>
	 
		<form action='mail.php' method='POST'>
			<p> To: <input type='text' name='mailTo'/> </p>
			<p>From: <input type='text' name='mailFrom'/> </p>
			<p>Subject: <input type='text' name='mailSubject'/> </p>
			<p>Message: <textarea rows='5' cols='17' type='text' name='mailMessage'></textarea> </p>
			<br/><br/><br/><input type='submit' value='Send eMail'/>
		</form>
	</body>
	

</html>
