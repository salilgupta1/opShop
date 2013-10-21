<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'].'/alchemyapi_php-master/alchemyapi.php');

$articleLink = isset($_GET['articleLink'])? $_GET['articleLink']:die('error');

//$articleLink = "http://news.yahoo.com/israeli-leader-step-pressure-iran-101940225.html";

//entity extraction

$alchemyAPI = new AlchemyAPI();

$entities = $alchemyAPI->entities('url', $articleLink, array('quotations'=>1));

foreach($entities['entities'] as $entity)
{
	if($entity['type']==='Person'){
		print_r($entity['text']);
		if(isset($entity['quotations'])){
			print_r($entity['quotations']);
		}
	}
	echo '<br>';
}

$keywords = $alchemyAPI->keywords('url',$articleLink,null);

foreach($keywords['keywords'] as $keyword)
{
	print_r($keyword['text']);
	echo '<br>';
}
