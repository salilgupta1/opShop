<?php
/*
OpShopDriver.php is the central controller. It calls all other controllers and combines output and sends off to view

Future Development would require a thorough overhall of this code.
Redundant code.
Probably require more efficient data structures
Build a new way to make queries

*/
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
require_once('controllers/BingSearchController.php');
require_once('controllers/AlchemyApiController.php');
require_once('controllers/CongressDBController.php');

function concat($str){
	return end(explode(" ",$str));
}
$articleLink = isset($_GET['link'])? die('error');


$alchemyController = new AlchemyApiController($articleLink);
$congressDBController = new CongressDBController();
$bingSearchController = new BingSearchController();

$keyWords = $alchemyController->getKeyWords();

$peopleConcat = array(concat($people[0]),concat($people[4]),concat($people[8]),concat($people[12]));

$query_f_lib = '"'.$people[0].'" + ';
$query_m_lib = '"'.$people[4].'" + ';
$query_m_con = '"'.$people[8].'" + ';
$query_f_con = '"'.$people[12].'" + ';

foreach($keyWords as $kw){
	$query_f_lib .= $kw['text'].' + ';
	$query_m_lib .= $kw['text'].' + ';
	$query_m_con .= $kw['text'].' + ';
	$query_f_con .= $kw['text'].' + ';
}
$query_f_lib =substr($query_f_lib, 0,strlen($query_f_lib)-3);
$query_m_lib =substr($query_m_lib, 0,strlen($query_m_lib)-3);
$query_m_con =substr($query_m_con, 0,strlen($query_m_con)-3);
$query_f_con =substr($query_f_con, 0,strlen($query_f_con)-3);



$response_f_lib = $bingSearchController->queryBing($query_f_lib);
$response_m_lib = $bingSearchController->queryBing($query_m_lib);
$response_m_con = $bingSearchController->queryBing($query_m_con);
$response_f_con = $bingSearchController->queryBing($query_f_con);


$articleUrls_f_lib = $bingSearchController->getArticleUrls($response_f_lib);
$articleUrls_m_lib = $bingSearchController->getArticleUrls($response_m_lib);
$articleUrls_m_con = $bingSearchController->getArticleUrls($response_m_con);
$articleUrls_f_con = $bingSearchController->getArticleUrls($response_f_con);

$validUrls = array();

$validUrls['f_lib'] = array('name'=>$people[0],'url'=>'none','state'=>$people[1],'party'=>$people[2],'pos'=>$people[3],'quote'=>'none','title'=>null);

foreach($articleUrls_f_lib as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);


	$validUrls['f_lib']['url']= $url;
		for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[0]);
		if($result!==false )
		{
			$validUrls['f_lib']['quote'] = $quotedPersons[$keys[$i]][0];
			$validUrls['f_lib']['title'] = $alchemyController->getTitle($url);
			break 2;
		}
	}
}


$validUrls['m_lib'] = array('name'=>$people[4],'url'=>'none','state'=>$people[5],'party'=>$people[6],'pos'=>$people[7],'quote'=>'none','title'=>null);
foreach($articleUrls_m_lib as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);


	$validUrls['m_lib']['url']=  $url;
	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[1]);
		if($result!==false)
		{
			$validUrls['m_lib']['quote'] = $quotedPersons[$keys[$i]][0];
			$validUrls['m_lib']['title'] = $alchemyController->getTitle($url);
			break 2;
		}
	}
}



//echo 'THESE ARE the moderate conservative articles';
$validUrls['m_con'] = array('name'=>$people[8],'url'=>'none','state'=>$people[9],'party'=>$people[10],'pos'=>$people[11],'quote'=>'none','title'=>null);
foreach($articleUrls_m_con as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);


	$validUrls['m_con']['url']=  $url;
	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[2]);
		if($result!==false )
		{
			$validUrls['m_con']['quote'] = $quotedPersons[$keys[$i]][0];
			$validUrls['m_con']['title'] = $alchemyController->getTitle($url);
			break 2;
		}
	}
}

//echo 'THESE ARE the far conservative articles';
$validUrls['f_con'] = array('name'=>$people[12],'url'=>'none','state'=>$people[13],'party'=>$people[14],'pos'=>$people[15],'quote'=>'none','title'=>null);
foreach($articleUrls_f_con as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);


	$validUrls['f_con']['url']= $url;

	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[3]);
		if($result!==false)
		{
			$validUrls['f_con']['quote'] = $quotedPersons[$keys[$i]][0];
			$validUrls['f_con']['title'] = $alchemyController->getTitle($url);
			break 2;
		}
	}
}

echo json_encode($validUrls);
