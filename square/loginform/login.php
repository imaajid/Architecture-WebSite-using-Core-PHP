<?php session_start();
require_once("application/protect.user.php");
$login = new USER();
$redirect_login = config::get('redirect_login');
if($login->is_loggedin()!="")
{
	if(isset($_GET['return'])) {
    		$login->redirect(urldecode($_GET['return']));
									}
		else
			$login->redirect($redirect_login);
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		if(isset($_GET['return'])) {
    		$login->redirect(urldecode($_GET['return']));
									}
		else
			$login->redirect($redirect_login);
		
	}
	else
	{
		$error = "username or password incorrect !";
	}	
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login | Lawyer</title>
      <link rel="stylesheet" href="assets/css/login-signup.css">
      <link rel="stylesheet" href="assets/css/login-signup1.css">
</head>
<body>
  	<div class="signin-form">
<div class="container">

	<section id="content">
		<form class="form-signin" method="post" id="login-form">
		<form action="">
			<h1>Please Login</h1>
<div id="error">
	<?php
		if(isset($error))
		{
	?>
		<div>
			<h3>&nbsp; <?php echo $error; ?> !</h3> 
		</div>
	<?php
		}
	?>
</div>

			<div class="form-group">
				<input type="text" class="form-control" name="txt_uname_email" placeholder="Username or email" required="" id="username" />
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="txt_password" placeholder="Password" required="" id="password" />
			</div>

			<div class="form-group">
				<input type="submit" name="btn-login" value="Log in" id="login" />
				<?php if (config::get('allow_signup')):?>
				<a href="signup.php"><b>Register</b></a>
				<?php endif;?>
			</div>
		</form><!-- form -->
		<div class="button">
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
    <script src="js/index.js"></script>
    <script type="text/javascript">function timedMsg(){var t=setTimeout("document.getElementById('error').style.display='none';",3000);}</script>
	<script language="JavaScript" type="text/javascript">timedMsg()</script>

</body>
</html>
