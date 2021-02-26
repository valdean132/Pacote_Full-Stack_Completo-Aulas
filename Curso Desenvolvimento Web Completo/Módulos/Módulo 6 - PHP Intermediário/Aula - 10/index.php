<?php
	session_start();
	setcookie('nome', 'Valdean', time() - (60*60*24), '/');

	echo $_COOKIE['nome'];
?>