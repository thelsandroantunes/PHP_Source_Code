	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>My First PHP Program</title>
			<link href="style.css" rel="stylesheet" type="text/css">

			</head>
			<body>



				<div id="main">

				<h1>PHP Saída de Código</h1>

				<p>
					<?php
						if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
						{
							$name = $_POST['name'];
							$email = $_POST['email'];
							$subject = $_POST['subject'];
							$message = $_POST['message'];

							echo "Seu nome é ".$name;
					?>
					<br>
					<?php
							echo "Seu email é ".$email;
					?>
					<br>
					<?php
							echo "Seu asunto é ".$subject;
					?>
					<br>
					<?php
					    echo "Sua mensagem é ".$message;
            }
          ?>

				</p>

			    </div>

			</body>
			</html>
