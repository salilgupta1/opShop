<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'].'/model/database/tables/CongressDB.php');

class CongressDBController {

	private $congressDB;

	function __construct()
	{
		$this->congressDB = new CongressDB();
	}

	/*public function processNames($nameSet)
	{
		$lastNames = array();
		foreach($nameSet as $name)
		{
			$lastName = end(explode(" ",$name));
			array_push($lastNames,$lastName);
		}
		$inQuery = "'".implode("','",$lastNames)."'";
		$result= $this->congressDB->getCongressMenByLastNames($inQuery);
		return $result;
	}*/


	public function findCongressPeopleInDB(){}//Alex build your function for choosing people in here. you can change the name
}