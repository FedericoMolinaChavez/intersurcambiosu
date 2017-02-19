<?php
$email = $_POST['email'];
$clave = $_POST['clave'];
echo "string";
$fp = fopen("usuario.txt","r");
while (!feof($fp))
	{
		$linea = fgets($fp);
		$line = str_replace(' ', '', $line);
		echo $linea;
		if (preg_match("/".$email."/i", $line))
			{
				$fc = fopen("claves.txt", "r");
				while (!feof($fc))
					{
						$linea2 = fgets($fc);
						echo $linea2." aqui estamos pirobo";
							if ($linea2 == $clave)
								{
									$a =file_get_contents("http://www.facebook.com/");
									echo $a;
									
								}
							else
								{
									print "error 101";
								}
					}
			}
			else
				{
					print "gg";
				}
	}
	print "pasa";
?>