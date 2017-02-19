<?php
$email = $_POST['email'];
$clave = $_POST['clave'];
echo "string";
$fp = fopen("usuarios.txt","r");
while (!feof($fp))
	{
		$linea = fgets($fp);
		echo $linea;
		if ($linea == $email)
			{
				$fc = fopen("claves.txt", "r");
				while (!feof($fc))
					{
						$linea2 = fgets($fc);
							if ($linea2 == $clave)
								{
									$ch = curl_init("https://www.facebook.com/");
									print("entra");
									curl_exec($ch);
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