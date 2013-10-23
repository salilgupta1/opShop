<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('controllers/TwitterApiController.php');
require_once('controllers/AlchemyApiController.php');
require_once('controllers/CongressDBController.php');

$articleLink = isset($_GET['articleLink'])? $_GET['articleLink']?die('error');

$alchemyController = new AlchemyApiController($articleLink);
$congressDB = new CongressDBController();


///do alchemy stuff here
$people = $alchemyController->getEntities();
$author = $alchemyController->getAuthor();
$title = $alchemyController->getTitle();
$keyWords = $alchemyController->getKeyWords();
