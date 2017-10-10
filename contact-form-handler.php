<?php

$myemail = 'support@apheliontoken.com'; // <-- Put Your email address here

function SQLString($str)
{
	return "'".str_replace('\\', '\\\\', str_replace('\'', '\'\'', $str))."'";
}

function ValidEmail($email)
{
	return preg_match('/^[a-z0-9\._-]+@([a-z0-9_-]+\.)+[a-z0-9_-]+/i', $email);
}

$errors = '';

// Check fields
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

$fields = array();
if (empty($email))
	$fields[] = "Email";

if (count($fields) > 0)
{
	$errors .= "Please, fill required fields: ".implode(', ', $fields)."<br>";
}

if (!ValidEmail($email))
{
	$errors .= "Please, enter valid email address<br>";
}

// Check reCaptcha
if (empty($errors))
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
		'secret' => '6LdmbDMUAAAAAMcZxVH1T1hGughRcI6AfUFAMk64',
		'response' => @$_POST['g-recaptcha-response'],
		'remoteip' => (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '')
	)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close ($ch);
	$answer = json_decode($result, true);
	if (!(is_array($answer) && isset($answer['success']) && $answer['success'] == true))
	{
		$errors .= "You entered wrong captcha<br>";
	}
}

header("Content-Type: text/html; charset=utf-8");

if (empty($errors))
{
	$dbLink = mysqli_connect('localhost', 'aphelion_23sadWE', '');
	if ($dbLink)
	{
		if (mysqli_select_db($dbLink, 'aphelion_2esdd23e42S'))
		{
			mysqli_query($dbLink, 'SET NAMES utf8');
			$query = 'INSERT INTO email_list (Email, datestamp) VALUES (
				'.SQLString($email).', CURRENT_TIMESTAMP()
				)';
			mysqli_query($dbLink, $query);
		}
	}

	$to = $myemail;
	$email_subject = "Contact form submission: ".htmlspecialchars($email);
	$email_body = "You have received a new message. ".
		" Here are the details: Email: ".htmlspecialchars($email)." ";
	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email";
	mail($to, $email_subject, $email_body, $headers);
	echo "OK";
}
else
{
	echo $errors;
}
