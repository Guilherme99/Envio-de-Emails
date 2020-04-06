<!DOCTYPE html>
<html>
<head>
	<title>Envio</title>
	<meta charset="utf-8">
	<style type="text/css">
		form{
			border: 2px solid #021;
			padding: 10px;
			width: 300px;
			margin-top: -10px;
			text-align: center;
			position: relative;
			margin-left: 80px;
		}
		label{
			margin:10px;
			padding: 2px;
		}	
		h3#nome{
			color: #08F155;
			border: 2px solid #000;
			width: 310px;
			padding: 5px;
			text-decoration: none;
			margin-top: 20px;
			font-family: arial,sans-serif;
			position: relative;
			margin-left: 80px;
		}
		input{
			text-align: justify-all;
			margin:10px;
		}
		input#envio{
			text-align: center;
			width: 90px;
			height: 30px;
			padding: 4px;

		}
		div{
			background: #fff;
			width: 500px;
			position: absolute;
			margin-left: 400px;
			padding: 10px;
			margin-top: 30px;
			border-radius: 10px;
			border-collapse: collapse;
			border-spacing: unset;

		}
		body{
			margin:30px 0 0 50px;	
			background: #82D0F9 
			
		}
	</style>
</head>
<body>
	<div>
		<h3 id="nome">Envio de E-mails</h3>
			<form method="post" action="arquivo.php"> 
				<label for="nomeRemetente"> Nome Remetente: </label> <br><input type="text" name="nomeRemetente" required="true"><br>
				<label for="UsuárioConta"> Usuário da conta:</label> <br><input type="text" name="UsuárioConta" required="true"> <br>
				<label for="SenhaConta"> Senha da conta: </label> <br><input type="password" name="SenhaConta" required="true"><br>
				<label for="emailDestinatario"> E-mail Destinatario: <br></label> <input type="text" name="emailDestinatario" required="true"><br>
				<label for="assunto"> Assunto: </label><br> <input type="text" name="assunto" required="true"><br>
				<label for="mensagem"> Mensagem: </label><br> <input type="text" name="mensagem" required="true"><br>
				<input type="submit" value="Enviar" id="envio">
			</form>
	</div>
</body>
</html>