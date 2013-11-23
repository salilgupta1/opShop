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
		$f_lib_rand = rand(0, self::F_LIB_COUNT-1);
		$f_lib_q = $this->congressDB->getCongressMenByRating(0, $f_lib_rand);
		$f_lib_first_name = $f_lib_q[0]['first_name'];
		$f_lib_last_name = $f_lib_q[0]['last_name'];
		$f_lib_state = $f_lib_q[0]['state'];
		$f_lib_party = $f_lib_q[0]['party'];
		$f_lib_pos = $f_lib_q[0]['position'];

		// Moderate liberal
		$m_lib_rand = rand(0, self::M_LIB_COUNT-1);
		$m_lib_q = $this->congressDB->getCongressMenByRating(1, $m_lib_rand);
		$m_lib_first_name = $m_lib_q[0]['first_name'];
		$m_lib_last_name = $m_lib_q[0]['last_name'];
		$m_lib_state = $m_lib_q[0]['state'];
		$m_lib_party = $m_lib_q[0]['party'];
		$m_lib_pos = $m_lib_q[0]['position'];

		// Moderate conservative
		$m_con_rand = rand(0, self::M_CON_COUNT-1);
		$m_con_q = $this->congressDB->getCongressMenByRating(2, $m_con_rand);
		$m_con_first_name = $m_con_q[0]['first_name'];
		$m_con_last_name = $m_con_q[0]['last_name'];
		$m_con_state = $m_con_q[0]['state'];
		$m_con_party = $m_con_q[0]['party'];
		$m_con_pos = $m_con_q[0]['position'];

		// Far conservative
		$f_con_rand = rand(0, self::F_CON_COUNT-1);
		$f_con_q = $this->congressDB->getCongressMenByRating(3, $f_con_rand);
		$f_con_first_name = $f_con_q[0]['first_name'];
		$f_con_last_name = $f_con_q[0]['last_name'];
		$f_con_state = $f_con_q[0]['state'];
		$f_con_party = $f_con_q[0]['party'];
		$f_con_pos = $f_con_q[0]['position'];

		return array($f_lib_first_name." ".$f_lib_last_name, $f_lib_state, $f_lib_party, $f_lib_pos, $m_lib_first_name." ".$m_lib_last_name, $m_lib_state, $m_lib_party, $m_lib_pos, $m_con_first_name." ".$m_con_last_name, $m_con_state, $m_con_party, $m_con_pos, $f_con_first_name." ".$f_con_last_name, $f_con_state, $f_con_party, $f_con_pos);

	}//Alex build your function for choosing people in here. you can change the name
}