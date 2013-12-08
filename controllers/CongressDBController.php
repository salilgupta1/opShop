<?php
/*
Controller that manages our Congress Database and talks directly with model CongressDB
1 function: findCongressPeopleInDB pulls 4 random congressional members 1 from each region of the political spectrum

Future development would require a thorough overhall of this for a more enhanced selection algorithm of congressional members based on various factors
*/
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

	}
}