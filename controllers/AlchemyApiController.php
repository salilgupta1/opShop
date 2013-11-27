<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'].'/alchemyapi_php-master/alchemyapi.php');

class AlchemyApiController {
	public $link;
	private $alchemyapi;

	function __construct($articleLink)
	{
		$this->link = $articleLink;
		$this->alchemyapi = new AlchemyAPI();
	}

	//only shows people that have been quoted in the article
	public function getEntities($url){
		//retrieve persons, and quotes associated with that person
		$response = $this->alchemyapi->entities('url',$url,array('quotations'=>1));
		$entities = $response['entities'];
		/*echo '<pre>';
		print_r($entities);
		echo '</pre>';*/
		$persons = array();
		foreach($entities as $entity)
		{
			if($entity['type']==='Person')
			{
				if(isset($entity['quotations'])){
					//array_push($person, $entity['text'] => true);
					$persons[$entity['text']] = $entity['quotations'];
				}
			}
		}
		/*echo "<pre>";
		print_r ($persons);
		echo '</pre>';*/
		//die();
		return $persons;
	}

	public function getKeyWords(){
		//retrieve keywords
		$response = $this->alchemyapi->keywords('url',$this->link,null);
		$keywords = $response['keywords'];
		$finalKeyWords = array();
		// so which keywords do we want... i think it should be the ones that are bigger than .9 or something in relevancez
		foreach($keywords as $keyword)
		{
			if($keyword['relevance']>=0.88)
			{
				array_push($finalKeyWords,array('text'=>$keyword['text'], 'relevance'=>$keyword['relevance']));
			}
		}
		return $finalKeyWords;
	}
/*	public function getConcept(){
		//returns the main concepts in the article
		$response = $this->alchemyapi->concepts('url',$this->link,null);
		$concepts = $response['concepts'];
		$finalConcepts = array();
		foreach($concepts as $concept)
		{
			if($concept['relevance']>0.6)
			{
				array_push($finalConcepts, array('text'=>$concept['text'],/*'relevance'=>$concept['relevance']));
			}
		}
		return $finalConcepts;
	}
	public function getAuthor(){
		$author = $this->alchemyapi->author('url',$this->link,null);
		return $author['author'];
	}*/
	public function getTitle(){
		$title = $this->alchemyapi->text_title('url',$this->link,null);
		return $title['title'];
	}
}

