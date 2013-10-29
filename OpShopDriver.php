<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//require_once('controllers/TwitterApiController.php');
require_once('controllers/AlchemyApiController.php');
//require_once('controllers/CongressDBController.php');

$articleLink = isset($_GET['link'])? $_GET['link']: die('error');

$alchemyController = new AlchemyApiController($articleLink);
//die('got here');
//$congressDB = new CongressDBController();

$author = $alchemyController->getAuthor();
$persons = $alchemyController->getEntities();
$title = $alchemyController->getTitle();

$keyWords = $alchemyController->getKeyWords();
$concepts = $alchemyController->getConcept();

$returnArray = array('title'=>$title,'author'=>$author,'keywords'=>$keyWords,'concepts'=>$concepts,'entities'=>$persons);

echo json_encode($returnArray);
