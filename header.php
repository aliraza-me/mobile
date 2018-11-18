<?php
//session_start();

//require 'database.php';

/*if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password,fullname,phone1,phone2,address FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}else { header("Location:".$site_url."login.php"); } */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>PK App! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->


    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

  </head>
  <body class="nav-md">
  	<div class="container body">
  		<div class="main_container">
<div>
  						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>PkMobile Pro!</span></a>
  					</div>


  					<!-- /menu profile quick info -->

  					<br />
