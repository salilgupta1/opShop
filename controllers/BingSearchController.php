<?php
/*
Controller that manages Bing News search.
2 functions : queryBing runs the query through bing news search and returns the response; getArticleUrls goes through the response and gets only the article urls

Future Development would require maybe google news search or larger request limit
*/
ini_set('display_errors',1);
error_reporting(E_ALL);
class BingSearchController {

	private $acctKey;
	private $serviceOp;
	private $top;

	function __construct()
	{
		require($_SERVER['DOCUMENT_ROOT']."/assets/bingAccountKey.php");
		$this->acctKey = $BING_SEARCH_ACCOUNT_KEY;
		$this->serviceOp = "News";
		$this->top = 3;
	}

	public function queryBing($query){
		$rootUri = "https://api.datamarket.azure.com/Bing/Search";
		//$query = urlencode($query);
		$query = urlencode("'$query'");
		//die($query);
		$requestUri = "$rootUri/News?\$format=json&Query=$query";
		$requestUri = $rootUri."/".$this->serviceOp."?\$format=json&\$top=".$this->top."&Query=".$query;
		// Encode the credentials and create the stream context.
		$auth = base64_encode("$this->acctKey:$this->acctKey");
		$data = array(
			'http' => array(
			'request_fulluri' => true,
			// ignore_errors can help debug – remove for production. This option added in PHP 5.2.10
			'ignore_errors' => true,
			'header' => "Authorization: Basic $auth")
		);
		$context = stream_context_create($data);
		// Get the response from Bing.
		$response = file_get_contents($requestUri, 0, $context);
		return $response;
	}

	public function getArticleUrls($response){
		$jsonObj = json_decode($response,true);
		$urls = array();
		foreach($jsonObj['d']['results'] as $value)
		{
			array_push($urls,$value['Url']);
		}
		return $urls;
	}



}
