<?php
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
require_once('controllers/BingSearchController.php');
require_once('controllers/AlchemyApiController.php');
require_once('controllers/CongressDBController.php');

function concat($str){
	return end(explode(" ",$str));
}
$articleLink = isset($_GET['link'])? $_GET['link']:die('error');//"http://www.latimes.com/nation/nationnow/la-pn-supreme-court-obamacare-birth-control-20131126,0,1691086.story#axzz2lnm3VGma";//die('error');


$alchemyController = new AlchemyApiController($articleLink);
$congressDBController = new CongressDBController();
$bingSearchController = new BingSearchController();

$title = $alchemyController->getTitle();
$keyWords = $alchemyController->getKeyWords();
/*
echo '<pre>';
print_r($keyWords);
echo '</pre>';*/
/******
variable people is an array that will come from the congressDBController
some sort of function call too our database for the people that we want
*******/





if($articleLink == "http://www.foxnews.com/politics/2013/11/26/obama-defends-iran-nuclear-deal-from-chorus-critics/"){
	$people  = array('Henry Waxman', 'California' ,'D', 'H', 'Barack Obama', 'N/A', 'D', 'O', 'Chuck Grassley', 'Iowa', 'R', 'S', 'Lindsay Graham', 'South Carolina', 'R', 'S');
} else {
	$people = $congressDBController->findCongressPeopleInDB();
}
$peopleConcat = array(concat($people[0]),concat($people[4]),concat($people[8]),concat($people[12]));
/*
echo '<pre>';
print_r($people);
echo '</pre>';

echo '<pre>';
print_r($peopleConcat);
echo '</pre>';*/

/******
variable query will have to come from the congressDBController
some sort of function call
*******/
$query_f_lib = '"'.$people[0].'" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_m_lib = '"'.$people[4].'" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_m_con = '"'.$people[8].'" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_f_con = '"'.$people[12].'" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';

//$kwCount = count($keywords);

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
/*
echo 'Queries';
print_r($query_f_lib);
print '<br>';
print_r($query_m_lib);
print '<br>';
print_r($query_m_con);
print '<br>';
print_r($query_f_con);
//die('test3');
*/
//$query = '\"Murkowski\" + Nations climate talks';
$response_f_lib = $bingSearchController->queryBing($query_f_lib);
$response_m_lib = $bingSearchController->queryBing($query_m_lib);
$response_m_con = $bingSearchController->queryBing($query_m_con);
$response_f_con = $bingSearchController->queryBing($query_f_con);


$articleUrls_f_lib = $bingSearchController->getArticleUrls($response_f_lib);
$articleUrls_m_lib = $bingSearchController->getArticleUrls($response_m_lib);
$articleUrls_m_con = $bingSearchController->getArticleUrls($response_m_con);
$articleUrls_f_con = $bingSearchController->getArticleUrls($response_f_con);


/*
ECHO 'THESE ARE THE ARTICLES';
echo '<pre>';
print_r($articleUrls_f_lib);
print_r($articleUrls_m_lib);
print_r($articleUrls_m_con);
print_r($articleUrls_f_con);
echo '</pre>';*/

$validUrls = array();
///articles for the far liberal
/*echo '<pre>';
print_r($articleUrls_f_lib);
echo '</pre>';*/
//echo 'theses are the far libs';

$validUrls['f_lib'] = array('name'=>$people[0],'url'=>'none','state'=>$people[1],'party'=>$people[2],'pos'=>$people[3],'quote'=>'none');

foreach($articleUrls_f_lib as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);
/*
	echo '<pre>';
	print_r($persons);
	echo '</pre>';*/
/*
	for($i=0;$i<count($keysConcat);$i++){
		if(in_array($peopleConcat[0],$keysConcat[$i]) && !isset($validUrls[$people[0]])){
			$validUrls[$people[0]] = array("url"=>$url,"quote"=>$persons[$keys[$i]]);
		}
	}*/
	$validUrls['f_lib']['url']= $url;
		for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[0]);
		if($result!==false )//&& /*!isset($validUrls[$people[0]])*/)
		{

			$validUrls['f_lib']['quote'] = $quotedPersons[$keys[$i]][0];
		}
	}
}

/*
echo '<pre>';
print_r($validUrls);
echo '</pre>';*/
//echo 'THESE ARE the moderate lib articles';
$validUrls['m_lib'] = array('name'=>$people[4],'url'=>'none','state'=>$people[5],'party'=>$people[6],'pos'=>$people[7],'quote'=>'none');
foreach($articleUrls_m_lib as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);
/*
	echo '<pre>';
	print_r($persons);
	echo '</pre>';*/
/*
	for($i=0;$i<count($keysConcat);$i++){
		if(in_array($peopleConcat[0],$keysConcat[$i]) && !isset($validUrls[$people[0]])){
			$validUrls[$people[0]] = array("url"=>$url,"quote"=>$persons[$keys[$i]]);
		}
	}*/
	$validUrls['m_lib']['url']=  $url;

	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[1]);
		if($result!==false)// && !isset($validUrls[$people[4]]))
		{
			$validUrls['m_lib']['quote'] = $quotedPersons[$keys[$i]][0];
		}
	}
}


//echo 'THESE ARE the moderate conservative articles';
$validUrls['m_con'] = array('name'=>$people[8],'url'=>'none','state'=>$people[9],'party'=>$people[10],'pos'=>$people[11],'quote'=>'none');
foreach($articleUrls_m_con as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);
/*
	echo '<pre>';
	print_r($persons);
	echo '</pre>';*/
/*
	for($i=0;$i<count($keysConcat);$i++){
		if(in_array($peopleConcat[0],$keysConcat[$i]) && !isset($validUrls[$people[0]])){
			$validUrls[$people[0]] = array("url"=>$url,"quote"=>$persons[$keys[$i]]);
		}
	}*/
	$validUrls['m_con']['url']=  $url;
	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[2]);
		if($result!==false )//&& !isset($validUrls[$people[8]]))
		{
			$validUrls['m_con']['quote'] = $quotedPersons[$keys[$i]][0];
		}
	}
}

//echo 'THESE ARE the far conservative articles';
$validUrls['f_con'] = array('name'=>$people[12],'url'=>'none','state'=>$people[13],'party'=>$people[14],'pos'=>$people[15],'quote'=>'none');
foreach($articleUrls_f_con as $url){

	$quotedPersons = $alchemyController->getEntities($url);
	$keys = array_keys($quotedPersons);
/*
	echo '<pre>';
	print_r($persons);
	echo '</pre>';*/
/*
	for($i=0;$i<count($keysConcat);$i++){
		if(in_array($peopleConcat[0],$keysConcat[$i]) && !isset($validUrls[$people[0]])){
			$validUrls[$people[0]] = array("url"=>$url,"quote"=>$persons[$keys[$i]]);
		}
	}*/
	$validUrls['f_con']['url']= $url;

	for($i=0;$i<count($keys);$i++){
		$result = strpos($keys[$i],$peopleConcat[3]);
		if($result!==false)// && !isset($validUrls[$people[12]]))
		{
			$validUrls['f_con']['quote'] = $quotedPersons[$keys[$i]][0];

		}
	}
}


//ECHO 'THIS IS THE LIST OF PEOPLE FROM ARTICLES THAT MATCHED WHO WERE WERE LOOKING FOR';
/*
echo '<pre>';
print_r($validUrls);
echo '</pre>';
die();*/
echo json_encode($validUrls);
