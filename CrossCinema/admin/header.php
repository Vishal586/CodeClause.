<?php
session_start();
if(isset($_SESSION['loginsuccesfull'])){}
	else{
		echo "<script>alert('You are not logged in'); window.location.href='login.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Cross Cinema</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		body {
			margin: 0;
		}

		/* Style for the sidebar container */
		.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #140d14;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #140d14;
  color: white;
}

		div.content {
			margin-left: 200px;
			padding: 1px 16px;
			height: 1000px;
		}

		@media screen and (max-width: 700px) {
			.sidebar {
				width: 100%;
				height: auto;
				position: relative;
			}

			.sidebar a {
				float: left;
			}

			div.content {
				margin-left: 0;
			}
		}

		@media screen and (max-width: 400px) {
			.sidebar a {
				text-align: center;
				float: none;
			}
		}
	</style>
</head>
<body>
	<!-- nav -->
	<div class="container">
		<img src="img/logo.png" style="height: 100px; width: auto; max-width: 100%">
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Hello,<?php echo $_SESSION['user']; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="registeradmin.php">Registrer Admin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="adminlist.php">Admin List</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="movielist.php">Movie</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="categorylist.php">Category</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="genrelist.php">Genre</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-outline-danger" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
</nav>
<!-- navend -->

<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="movielist.php">Movies</a>
  <a href="contact.php">Contact</a>

  <a href="adminlist.php">Admins</a>
  <a href="categorylist.php">Categories</a>
  <a href="genrelist.php">Genre</a>

</div>