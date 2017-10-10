<?php

$dbLink = mysqli_connect('localhost', 'aphelion_23sadWE', '=Ts~)Ik=G[*aP~VE)e');
if ($dbLink)
{
	if (mysqli_select_db($dbLink, 'aphelion_2esdd23e42S'))
	{
		mysqli_query($dbLink, 'SET NAMES utf8');
		if (isset($_REQUEST['Email']))
		{
			$query = 'INSERT INTO email_list (Email) VALUES (\''.str_replace('\\', '\\\\', str_replace('\'', '\'\'', $_REQUEST['Email'])).'\')';
			mysqli_query($dbLink, $query);
		}
	}
}
