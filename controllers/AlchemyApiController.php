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
	public function getEntities(){
		//retrieve persons, and quotes associated with that person
		$response = $this->alchemyapi->entities('url',$this->link,array('quotations'=>1));
		$entities = $response['entities'];
		//print_r($entities);
		//die();
		$persons = array();
		foreach($entities as $entity)
		{
			if($entity['type']==='Person')
			{
				if(isset($entity['quotations'])){
					array_push($persons,array('name'=>$entity['text'],'quotations'=>$entity['quotations']));
				}
				else
					array_push($persons,array('name'=>$entity['text']));
			}
		}
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
			if($keyword['relevance']>0.6)
			{
				array_push($finalKeyWords,array('text'=>$keyword['text'], 'relevance'=>$keyword['relevance']));
			}
		}
		return $finalKeyWords;
	}
	public function getConcept(){
		//returns the main concepts in the article
		$response = $this->alchemyapi->concepts('url',$this->link,null);
		$concepts = $response['concepts'];
		//print_r($response);
		//die();
		$finalConcepts = array();
		foreach($concepts as $concept)
		{
			if($concept['relevance']>0.7)
			{
				array_push($finalConcepts, array('text'=>$concept['text'],'relevance'=>$concept['relevance']));
			}
		}
		return $finalConcepts;
	}
	public function getAuthor(){
		$author = $this->alchemyapi->author('url',$this->link,null);
		return $author['author'];
	}
	public function getTitle(){
		$title = $this->alchemyapi->text_title('url',$this->link,null);
		return $title['title'];
	}
}

