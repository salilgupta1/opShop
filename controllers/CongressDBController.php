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

	
	public function findCongressPeopleInDB(){
		/*
		// Far liberal
		$f_lib_count = this->congressDB->getCountOfCongressMenByRating(0);
		$f_lib_rand = rand(0, $f_lib_count-1);
		$f_lib_q = this->congressDB->getCountOfCongressMenByRating(0, $f_lib_rand);
		$f_lib_first_name = $f_lib_q['first_name'];
		$f_lib_last_name = $f_lib_q['last_name'];
		
		// Moderate liberal
		$m_lib_count = this->congressDB->getCountOfCongressMenByRating(1);
		$m_lib_rand = rand(0, $m_lib_count-1);
		$m_lib_q = this->congressDB->getCountOfCongressMenByRating(1, $m_lib_rand);
		$m_lib_first_name = $m_lib_q['first_name'];
		$m_lib_last_name = $m_lib_q['last_name'];

		// Moderate conservative
		$m_con_count = this->congressDB->getCountOfCongressMenByRating(2);
		$m_con_rand = rand(0, $m_con_count-1);
		$m_con_q = this->congressDB->getCountOfCongressMenByRating(2, $m_con_rand);
		$m_con_first_name = $m_con_q['first_name'];
		$m_con_last_name = $m_con_q['last_name'];

		// Far conservative
		$f_con_count = this->congressDB->getCountOfCongressMenByRating(3);
		$f_con_rand = rand(0, $f_con_count-1);
		$f_con_q = this->congressDB->getCountOfCongressMenByRating(3, $f_con_rand);
		$f_con_first_name = $f_con_q['first_name'];
		$f_con_last_name = $f_con_q['last_name'];

		return array($f_lib_first_name, $f_lib_last_name, $m_lib_first_name, $m_lib_last_name, $m_con_first_name, $m_con_last_name, $f_con_first_name, $f_con_last_name);
*/
	}//Alex build your function for choosing people in here. you can change the name
}