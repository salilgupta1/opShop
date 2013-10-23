<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//require_once($_SERVER['DOCUMENT_ROOT'].'/model/database/tables/CongressDB.php');
?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OpShop</title>

	<script src = '/views/javascript/bootstrap.min.js'></script>
	<script src = '/views/javascript/jquery/jquery-1.10.2.js'></script>
	<script src = '/views/javascript/OpShop.js'></script>
	<script>
		//Alchemy.init();
	</script>

	<link type = 'text/css' rel = 'stylesheet' href = '/views/css/bootstrap.min.css'/>
	<link type = 'text/css' rel = 'stylesheet' href = '/views/css/bootstrap-theme.min.css'/>
	<style>
		body {
		  padding-top: 50px;
		}
		.starter-template {
		  padding: 40px 15px;
		  text-align: center;
		}
	</style>
</head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">OpShop</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>OpShop</h1>
        <form method = 'get' action = '/alchemy.php'>
        	<div class = 'form-group'>
        		<input type="url" class="form-control" id = 'articleLink'placeholder="URL">
        	</div>
        	<button type="submit" id = 'submit' class="btn btn-default">Submit</button>
        </form>
      </div>

    </div><!-- /.container -->

  </body>
</html>
