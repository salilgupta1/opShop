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
		$persons = array();
		foreach($entities as $entity)
		{
			if($entity['type']==='Person')
			{
				if(isset($entity['quotations'])){
					$persons[$entity['text']] = $entity['quotations'];
				}
			}
		}
		return $persons;
	}

	public function getKeyWords(){
		//retrieve keywords
		$response = $this->alchemyapi->keywords('url',$this->link,null);
		$keywords = $response['keywords'];
		$finalKeyWords = array();
		foreach($keywords as $keyword)
		{
			if($keyword['relevance']>=0.88)
			{
				array_push($finalKeyWords,array('text'=>$keyword['text'], 'relevance'=>$keyword['relevance']));
			}
		}
		return $finalKeyWords;
	}
	public function getTitle($url){
		$title = $this->alchemyapi->text_title('url',$url,null);
		return $title['title'];
	}
}

