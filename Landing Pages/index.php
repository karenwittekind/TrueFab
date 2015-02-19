<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'colin@truefabrications.com';
	$subject = 'True Fabrications Catalog Request'

	$body = "E-mail: $email\n Message:\n $message";

	if ($_POST['submit'] && $human == '4') {
		if (mail ($to, $subject, $body, $from)) {
			echo '<p>Your message has been sent!</p>';
		} else {
			echo '<p>Something went wrong, go back and try again!</p>';
		}
	} else if ($_POST['submit'] && $human != '4') {
		echo '<p>You answered the anti-span question incorrectly!</p>';
	}
?>