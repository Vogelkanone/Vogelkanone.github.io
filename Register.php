<!DOCTYPE html>
<html>
<head>
	<title>Skyland Sekarpuro</title>
	<link rel="stylesheet" type="text/css" href="styleReg.css">
    
</head>
<body>
	<div id="wrapper">
		<form action="RegisterMech.php" method="POST">
			<h1>Register</h1>
			<label>Username</label>
			<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
			<label>Password </label>
			<input type="password" name="password" placeholder="masukkan password" required="" >
			<button type="submit">SUBMIT</button>
		</form>
	</div>
	
		<?php if(isset($_GET['pesan'])) { ?>
			<div class="error">
				<label>Oopps... <?php echo $_GET['pesan']; ?></label>
			</div>
		<?php } ?>
	

		
</body>
</html>