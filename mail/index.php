<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kirim email</title>
</head>
<body>
	<form action="sendmail_helper.php" method="POST">
		<div>
			<label>Email Penerima</label>
			<input type="text" name="email">
		</div>
		<div>
			<label>Isi Pesan</label>
			<textarea name="pesan"></textarea>
		</div>
		<div>
			<button type="submit" name="kirim">Kirim</button>
		</div>
	</form>

</body>
</html>