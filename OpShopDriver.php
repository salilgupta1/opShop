<?php
/*
Hey guys read this top part so you can get an idea of what is going on in the code.
So this code should work from start to end. Basically it takes an article, it finds its title keywords.
I have created a test array $people with congressmen/women that we would select from the database.
I also created a test query $query. That should change when alex inputs his function that builds the query.

Then I run the query on Bing and get a list of article urls to go through
I use alchemy to go through them and pull only the people that have quotes.

i then go through the list of people for each article url and search for a match in our list of people

Then I print it out.

This should be a good environment to test in before we start returning to the home page.
I'll be gone Sunday through tuesday. So use this platform to test how our querys are and the people we are select from the database
*/
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('controllers/BingSearchController.php');
require_once('controllers/AlchemyApiController.php');
require_once('controllers/CongressDBController.php');

function concat($str){
	return end(explode(" ",$str));
}
$articleLink = isset($_GET['link'])? $_GET['link']:"http://www.nytimes.com/2013/11/22/us/politics/reid-sets-in-motion-steps-to-limit-use-of-filibuster.html?hp&_r=0";//die('error');

//IMPORTANT!!!!!!!!!!!
//$articleLink = "";//when you wanna test different articles copy and past between the quotes

$alchemyController = new AlchemyApiController($articleLink);
$congressDBController = new CongressDBController();
$bingSearchController = new BingSearchController();

$title = $alchemyController->getTitle();
$keyWords = $alchemyController->getKeyWords();
print_r($keyWords);

/******
variable people is an array that will come from the congressDBController
some sort of function call too our database for the people that we want
*******/

$people = $congressDBController->findCongressPeopleInDB();
print_r($people);
//die();
$peopleConcat = array_map("concat",$people);
echo 'THIS IS THE ARRAY OF PEOPLE THAT WERE SELECTED FROM THE DATABASE';
echo '<pre>';
print_r($peopleConcat);
echo '</pre>';

/******
variable query will have to come from the congressDBController
some sort of function call
*******/
$query_f_lib = '\"'.$people[0].'\" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_f_mod = '\"'.$people[1].'\" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_m_con = '\"'.$people[2].'\" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';
$query_f_con = '\"'.$people[3].'\" + ';//.$keywords[0]["text"].' + \"'.$keywords[1]["text"].'\"';

foreach($keyWords as $kw) {
	$query_f_lib .= $kw["text"].' + ';
	$query_m_lib .= $kw["text"].' + ';
	$query_m_con .= $kw["text"].' + ';
	$query_f_con .= $kw["text"].' + ';
}

//$query = '\"Murkowski\" + Nations climate talks';
$response_f_lib = $bingSearchController->queryBing($query_f_lib);
$response_m_lib = $bingSearchController->queryBing($query_m_lib);
$response_m_con = $bingSearchController->queryBing($query_m_con);
$response_f_con = $bingSearchController->queryBing($query_f_con);


$articleUrls_f_lib = $bingSearchController->getArticleUrls($response_f_lib);
$articleUrls_m_lib = $bingSearchController->getArticleUrls($response_m_lib);
$articleUrls_m_con = $bingSearchController->getArticleUrls($response_m_con);
$articleUrls_f_con = $bingSearchController->getArticleUrls($response_f_con);

ECHO 'THIS IS THE NUMBER OF ARTICLES FROM BING AND THEIR URLS';
print_r(count($articleUrls_f_lib). " urls to check");
echo '<pre>';
print_r($articleUrls_f_lib);
echo '</pre>';

$validUrls = array();

foreach($articleUrls_f_lib as $url){

	$persons = $alchemyController->getEntities($url);
	ECHO ' THIS IS THE LIST OF THE PEOPLE QUOTED IN THIS ARTICLE';
	echo '<pre>';
	print_r($persons);
	echo '</pre>';

	$keys = array_keys($persons);
	$keysConcat = array_map("concat",$keys);

	for($i=0;$i<count($peopleConcat);$i++){
		if(in_array($peopleConcat[$i],$keysConcat) && !isset($validUrls[$people[$i]])){
			$validUrls[$people[$i]] = $url;
		}
	}
}
ECHO 'THIS IS THE LIST OF PEOPLE FROM ARTICLES THAT MATCHED WHO WERE WERE LOOKING FOR';
echo '<pre>';
print_r($validUrls);
echo '</pre>';
die('XOXOXOXOXOXOXOXOXOXO');


$returnArray = array('title'=>$title,/*'author'=>$author,*/'keywords'=>$keyWords/*,'concepts'=>$concepts,'entities'=>$persons*/);

echo json_encode($returnArray);