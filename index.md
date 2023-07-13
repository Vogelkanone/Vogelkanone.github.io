<!DOCTYPE html>
<html>
<head>
	<title>Skyland Sekarpuro</title>
	<link rel="stylesheet" type="text/css" href="https://Vogelkanone.github.io/Style.css">
    
</head>
<body>
	<div id="wrapper">
		<form action="https://Vogelkanone.github.io/Register.php" method="POST">
			<h1>Create Account Marketers</h1>
			<button type="submit">SUBMIT</button>
		</form>
	</div>
	<div id="wrapper2">
		<form action="Dashboard.php" method="POST">
			<h1>MonitorData Marketers</h1>
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
