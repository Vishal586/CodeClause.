<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<!-- registration form -->
<div class="container">
	<div class="head" style="text-align: center;">
		<h1>Register admin for Cross Cinema</h1>
	</div>

	<form action="registeradmin.php" method="post">

	<form>
		<div class="form-group" table style="margin-left: 150px;">
			<label for="exampleInputEmail1">Email address</label>
			<input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>

		<div class="form-group" table style="margin-left: 150px;">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>

		<button type="submit" name="submit" class="btn btn-primary" table style="margin-left: 150px;">Submit</button>
</form>
</div>
<!-- registration end -->

<?php

if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$hash = password_hash("$pwd", PASSWORD_BCRYPT);

	$query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";
	$run = mysqli_query($con,$query);

	if ($run) {
		echo "<script>alert('Admin Successfully Added.. :)');window.location.href='adminlist.php';</script>";

	}
	else{
		echo "something wrong";
	}
}

 ?>