<?php
/*
Another class built on top of MySql for abstraction purposes.
*/
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('MySql/MySql.php');

class DataStore
{
	private $db = NULL;
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
}
