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
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$contribution = isset($_POST['contribution']) ? trim($_POST['contribution']) : '';
$currency = isset($_POST['currency']) ? trim($_POST['currency']) : '';
$info = isset($_POST['textMessage']) ? trim($_POST['textMessage']) : '';

$fields = array();
if (empty($firstName))
	$fields[] = "First Name";
if (empty($lastName))
	$fields[] = "Last Name";
if (empty($email))
	$fields[] = "Email";
if (empty($contribution))
	$fields[] = "Contribution Amount";
if (empty($currency))
	$fields[] = "Currency";

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
			$query = 'INSERT INTO contact_list (FirstName, LastName, Email, ContributionAmount, Currency, AdditionalInfo, Created) VALUES (
				'.SQLString($firstName).',
				'.SQLString($lastName).',
				'.SQLString($email).',
				'.SQLString($contribution).',
				'.SQLString($currency).',
				'.SQLString($info).', NOW()
				)';
			mysqli_query($dbLink, $query);
		}
	}

	$to = $myemail;
	$email_subject = "Presale Application: ".htmlspecialchars($email);
	$email_body = "You have received a new message. ".
		" Here are the details: Name: ".htmlspecialchars($firstName)." ".htmlspecialchars($firstName)." Email: ".htmlspecialchars($email)." Contribution: ".htmlspecialchars($contribution)." Currency: ".htmlspecialchars($currency)." Message: ".htmlspecialchars($info)." ";
	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email";
	mail($to, 'Presale Info', $email_body, $headers);

	$email_body = "Thank you for your interest in the Aphelion private offer. Please note this round is only available until the 20M token allotment is sold.

The private offer has a $5,000 USD equivalent minimum and includes 100% bonus tokens, reducing your token cost to $0.10 USD equivalent. The standard sale without bonus will be sold at $0.20 USD equivalent.

Exchange rates for the Aphelion Token (APH) along with deposit instructions are listed below:
1 BTC = 21,500 APH + 21,500 APH Bonus [43,000 APH total]
1 ETH = 1,475 APH + 1,475 APH Bonus [2,950 APH total]
1 NEO = 163 APH + 163 APH Bonus [326 APH total]
1 GAS = 140 APH + 140 APH Bonus [280 APH total]

Please reply with the currency you wish to use (BTC, ETH or NEO) along with the amount and your public address to be sent from.  We will then send you a deposit address.  Your transaction will be verified via communication from our team.  If you wish to communicate with us securely, please reply with your @telegram handle and we will contact you.

*Please note we will not be accepting contributions from citizens of the USA.  All accounts will be KYC verified prior to token distribution";
	$headers = "From: presale@apheliontoken.com\n";
	$headers .= "Reply-To: presale@apheliontoken.com";
	mail($email, $email_subject, $email_body, $headers);
	echo "OK";
}
else
{
	echo $errors;
}
