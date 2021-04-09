<?php
// error_reporting('E_All');
ini_set('display_errors', '1');
?>
<?php
	date_default_timezone_set('Europe/Zurich');
	include_once 'inc/config.php';
	include 'inc/varcode.php';
	$activNav = "varCode";
?>
<!doctype html>
<html class="no-js" lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Variationskarten <?php echo $_GET['id'] ?> | Angela Bruderer</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>