<!--
Simple page shown only if database configurations problem
-->
<!DOCTYPE html>
<html >
	<head>
		  <meta charset="UTF-8">
		  <title>Error | Lawyer</title>
	      <link rel="stylesheet" href="assets/css/login-signup.css">
	      <link rel="stylesheet" href="assets/css/login-signup1.css">
	</head>
			<body>

<?php
		if(isset($_GET['error']))
		{
			?>
			<center>
				<h2 style="margin-top:100px">Database Configurations Error, Please recheck database configurations.</h2>
				</center>
			</body>

			<?php
        }
		else
		{
			?>
				<center>
				<h2>Nothing to show here</h2></center>
				<?php header("location: login.php") ?>
					</div>
				</form>
			<?php
		}
	?>
</html>