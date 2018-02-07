<?php
	require_once 'vendor/autoload.php';

	//$loginURL = $gclient->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login using google api</title>

	 <!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script> 
</head>
<body>
<div class = "container">
	<h1>login Using your gmail</h1>
	<form>
		<input type = "email" name = "email" id = "email" placeholder = "email"><br><br>
		<input type = "password" name = "pass" id = "pass" placeholder = "password" ><br><br>
		<button type = "submit" class = "btn btn-md btn-info">LOGIN</button> <button class = "btn btn-md btn-info" type = "button" onclick = "window.location = '<?php echo $loginURL; ?>'; ">LOGIN using google</button>
	</form>
</div>
</body>

</html>