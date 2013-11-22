<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'].'/model/database/tables/CongressDB.php');

class CongressDBController {

	private $congressDB;

	const F_LIB_COUNT = 8;
	const M_LIB_COUNT = 7;
	const M_CON_COUNT = 6;
	const F_CON_COUNT = 8;

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
		$result= $$this->congressDB->getCongressMenByLastNames($inQuery);
		return $result;
	}*/

	
	public function findCongressPeopleInDB(){
		
		// Far liberal
		//$f_lib_count = $this->congressDB->getCountOfCongressMenByRating(0);
		//print $f_lib_count[0]["count(*)"];
		$f_lib_rand = rand(0, self::F_LIB_COUNT-1);
		//print $f_lib_rand." FLIB   ";
		//print $f_lib_rand;
		$f_lib_q = $this->congressDB->getCongressMenByRating(0, $f_lib_rand);
		//print self::F_LIB_COUNT;
		//print_r($f_lib_q);
		//die();
		//print_r($f_lib_q);
		$f_lib_first_name = $f_lib_q[0]['first_name'];
		$f_lib_last_name = $f_lib_q[0]['last_name'];
		
		// Moderate liberal
		//$m_lib_count = $this->congressDB->getCountOfCongressMenByRating(1);
		$m_lib_rand = rand(0, self::M_LIB_COUNT-1);
		//print $m_lib_rand." MLIB   ";
		$m_lib_q = $this->congressDB->getCongressMenByRating(1, $m_lib_rand);
		//print_r($m_lib_q);
		$m_lib_first_name = $m_lib_q[0]['first_name'];
		$m_lib_last_name = $m_lib_q[0]['last_name'];

		// Moderate conservative
		//$m_con_count = $this->congressDB->getCountOfCongressMenByRating(2);
		$m_con_rand = rand(0, self::M_CON_COUNT-1);
		//print $m_con_rand." MCON   ";
		$m_con_q = $this->congressDB->getCongressMenByRating(2, $m_con_rand);
		$m_con_first_name = $m_con_q[0]['first_name'];
		$m_con_last_name = $m_con_q[0]['last_name'];

		// Far conservative
		//$f_con_count = $this->congressDB->getCountOfCongressMenByRating(3);
		$f_con_rand = rand(0, self::F_CON_COUNT-1);
		//print $f_con_rand." FCON   ";
		$f_con_q = $this->congressDB->getCongressMenByRating(3, $f_con_rand);
		$f_con_first_name = $f_con_q[0]['first_name'];
		$f_con_last_name = $f_con_q[0]['last_name'];

		return array($f_lib_first_name." ".$f_lib_last_name, $m_lib_first_name." ".$m_lib_last_name, $m_con_first_name." ".$m_con_last_name, $f_con_first_name." ".$f_con_last_name);

	}//Alex build your function for choosing people in here. you can change the name
}