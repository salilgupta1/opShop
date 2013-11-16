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
//$articleLink = isset($_GET['link'])? $_GET['link']:"http://www.deseretnews.com/article/865589797/Mitt-Romney-goes-after-tea-party-Obamas-fundamental-dishonesty-about-Obamacare.html";//die('error');

//IMPORTANT!!!!!!!!!!!
$articleLink = "";//when you wanna test different articles copy and past between the quotes

$alchemyController = new AlchemyApiController($articleLink);
$congressDBController = new CongressDBController();
$bingSearchController = new BingSearchController();

$title = $alchemyController->getTitle();
$keyWords = $alchemyController->getKeyWords();

/******
variable people is an array that will come from the congressDBController
some sort of function call too our database for the people that we want
*******/

$people = array('Barack Obama','John Boehner','Mitt Romney');

$peopleConcat = array_map("concat",$people);
echo 'THIS IS THE ARRAY OF PEOPLE THAT WERE SELECTED FROM THE DATABASE';
echo '<pre>';
print_r($peopleConcat);
echo '</pre>';

/******
variable query will have to come from the congressDBController
some sort of function call
*******/
$query = 'President Obama, Mitt Romney, John Boehner and healthcare';
$response = $bingSearchController->queryBing($query);
$articleUrls = $bingSearchController->getArticleUrls($response);

ECHO 'THIS IS THE NUMBER OF ARTICLES FROM BING AND THEIR URLS';
print_r(count($articleUrls). " urls to check");
echo '<pre>';
print_r($articleUrls);
echo '</pre>';

$validUrls = array();

foreach($articleUrls as $url){

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