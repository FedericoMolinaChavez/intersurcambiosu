<?php
$email = $_POST['email'];
$clave = $_POST['clave'];
echo "string";
$fp = fopen("usuario.txt","r");
while (!feof($fp))
	{
		$linea = fgets($fp);
		$linea = trim($linea);
		echo $linea;
		if ($email== $linea)
			{
				$fc = fopen("claves.txt", "r");
				while (!feof($fc))
					{
						$linea2 = fgets($fc);
						$linea2 = trim($linea2);
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