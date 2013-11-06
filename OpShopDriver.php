<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('controllers/BingSearchController.php');
require_once('controllers/AlchemyApiController.php');
require_once('controllers/CongressDBController.php');

$articleLink = isset($_GET['link'])? $_GET['link']: die('error');//"http://www.deseretnews.com/article/865589797/Mitt-Romney-goes-after-tea-party-Obamas-fundamental-dishonesty-about-Obamacare.html";//die('error');

$alchemyController = new AlchemyApiController($articleLink);
$congressDBController = new CongressDBController();

//alchemy api stuff
$title = $alchemyController->getTitle();
$keyWords = $alchemyController->getKeyWords();
//$concepts = $alchemyController->getConcept();
//$author = $alchemyController->getAuthor();
//$persons = $alchemyController->getEntities();



$returnArray = array('title'=>$title,/*'author'=>$author,*/'keywords'=>$keyWords/*,'concepts'=>$concepts,'entities'=>$persons*/);

echo json_encode($returnArray);