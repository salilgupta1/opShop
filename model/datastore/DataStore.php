<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('MySql/MySql.php');

//require_once($_SERVER['DOCUMENT_ROOT']."/include/session.php");

class DataStore
{
	private $db = NULL;
	//private static $queries;
	//private static $lastQueryStart = 0;

	function __construct() {
		$this->db = new Mysql();
	}

	//create operations
	public function insertPID($query)
	{
		$pid = $this->db->insert($query);
		if($pid)
		{
			return $pid;
		}
		else
			return false;
	}
	//update operations
	public function set($query)
	{
		return $this->db->update($query);
	}
	//read/get operations
	public function get($query)
	{
		return $this->db->read($query);
	}
/*	public static function setReadOnly() {
		if (self::$hasSetDBInNonReadOnlyMode) {
			die("Already setDB in standard mode. Make sure you call setReadOnly earlier!");
		}
		self::$readOnly = true;
	}*/

	// SETUP //
	/*function setDB($db) {
		/*if (!self::$readOnly) {
			self::$hasSetDBInNonReadOnlyMode = true;
		}
		if ($db == _DB_ANALYTICS_) {
			$this->db = $this->RedshiftDB;
		}

		return $this->db->setDB($db);
	}*/

	// GET OPERATIONS //
	/*public function loadSingle($uuid, $query, $return_type, $expiry = 300) {

		//$results = $this->cache->get($uuid);
		//if($results) return $results;

		//Get From DB
		$results = $this->get($uuid, $query, $return_type);
		if(count($results)==0) return false;

		//Save to Cache if needed
		//$this->cache->set($uuid, $results[0], 600);

		return $results[0];
	}*/


	/*public function get($uuid, $query, $return_type, $cacheKey=null, $expiry=300) {
		$results = false;
		//if($cacheKey)
		//	$results = $this->cache->get($cacheKey);
		//else if($uuid)
		//	$results = $this->cache->get($uuid);

		//if(!$results)
		//$this->storeDebug($query);
		$results = $this->db->read($query);
		//$this->endQueryDebug();
		return $results;
	}*/

	// UPDATE OPERATIONS //
	/*public function insertPid($query) {
		//$this->exitIfWritingWhileReadOnly();
		//$this->storeDebug($query);
		if($pid = $this->db->insert($query)) {
			$this->endQueryDebug();
			return $pid;
		}
		$this->endQueryDebug();
		return false;
	}*/

	/*public function set($query, $uuid=NULL, $address=NULL, $data=NULL, $getPid=false, $cacheKey = false, $cacheExpiration = 300) {
		$this->exitIfWritingWhileReadOnly();
		$this->storeDebug($query);
		if($this->db->update($query)) {

			//if($cacheKey && $cacheExpiration) {
				//$this->cache->set($cacheKey, $data, $cacheExpiration);
			//}
			$this->endQueryDebug();
			if($getPid) return mysql_insert_id();
			else return true;
		}
		$this->endQueryDebug();
		return false;
	}*/


	//  TRANSACTION HANDLING  //
/*	public function transactionStart() {
		$this->exitIfWritingWhileReadOnly();
		return $this->db->transactionStart();
	}
	public function transactionExec($query, $update=false) {
		$this->exitIfWritingWhileReadOnly();
		return $this->db->transactionExec($query, $update);
	}
	public function transactionCommit() {
		$this->exitIfWritingWhileReadOnly();
		return $this->db->transactionCommit();
	}

	public function storeDebug($query){
		if($this->debug){
			self::$lastQueryStart = microtime();
			self::$queries[] = $query;
		}
	}

	public static function addDebugComment($comment){
		self::$queries[] = $comment;
	}

	public function getDebugging(){
		return self::$queries;
	}

	public function endQueryDebug(){
		if($this->debug){
			$timer = number_format(microtime() - self::$lastQueryStart,5);
			self::$queries[count(self::$queries) - 1] .= ' ['.$timer.']';
		}
	}

	/**
	 * If datastore is in read mode, it's pointed to a back up db server so that
	 * the main db is not distrubed. In this mode, writing is not allowed.
	 *//*
	protected function exitIfWritingWhileReadOnly() {
		if (self::$readOnly) {
			die("Cannot write to read only db! DataStore is in read mode!\n");
		}
	} */
}
