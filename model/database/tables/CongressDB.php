<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
/*
+-------------------+--------------+------+-----+---------+------------------+
| Field        		| Type         | Null | Key | Default | Extra            |
+-------------------+--------------+------+-----+---------+------------------+
| pid           	| int(11)      | NO   | PRI | NOT NULL| auto_increment   |
| first_name        | varchar(16)  | NO   |     | NOT NULL|					 |
| last_name 		| varchar(16)  | NO   | 	| NOT NULL| 				 |
| rating            | varchar(16)  | NO   |     | NOT NULL|                  |
| party
| special
| state
| twitter_handle
| image_url
| position
+-------------------+--------------+------+-----+---------+------------------+
*/
require_once ($_SERVER['DOCUMENT_ROOT'].'/model/datastore/DataStore.php');

class CongressDB{
	public $datastore;

	const T_name 						= 'congress_db';
	const F_pid 						= 'pid';
	const F_fName						= 'first_name';
	const F_lName 						= 'last_name';
	const F_rating						= 'rating';
	const F_party						= 'party';
	const F_special						= 'special';
	const F_state 						= 'state';
	const F_twitter_handle				= 'twitter_handle';
	const F_image_url					= 'image_url';
	const F_position					= 'position';
	//const of all the fields

	const LIB 							= 85;
	const MOD 							= 50;
	const CON 							= 15;
	// const of the rating delimiters

	function __construct(){
		$this->datastore = new DataStore();
	}

	public function getAllCongressMen()
	{
		$query = 'select * from '.self::T_name." order by ".self::F_pid." DESC";
		return $this->datastore->get($query);
	}

	public function getCongressMenByLastNames($lastNames)
	{
		$query = 'select '.self::F_fName.','.
						   self::F_lName.','.
						   self::F_rating.','.
						   self::F_party.','.
						   self::F_state.' from '.
						   self::T_name.' where '.self::F_lName.' in ('.$lastNames.')';
		return $this->datastore->get($query);
	}

	public function getCongressMenByRating($rating, $rownum)
	{
		$query = 'select '.self::F_fName.', '.
						   self::F_lName.', '.
						   self::F_state.', '.
						   self::F_party.', '.
						   self::F_position.' from '.
						   self::T_name.' where '.self::F_rating.' ';
		switch ($rating) {
			case 0:
				$query .= '> '.self::LIB;
				break;
			case 1:
				$query .= '>= '.self::MOD.' and '.self::F_rating.' <= '.self::LIB;
				break;
			case 2:
				$query .= '< '.self::MOD.' and '.self::F_rating.' >= '.self::CON;
				break;
			case 3:
				$query .= '< '.self::CON;
				break;
		}
		$query .= ' and '.self::F_special.' = \'Y\' limit '.$rownum.',1;';
		//if ($rating == 1) print $query;
		$test = $this->datastore->get($query);
		return $test;
	}

	public function getCountOfCongressMenByRating($rating)
	{
		$query = 'select count(*) from '.self::T_name.' where '.self::F_rating.' ';
		switch ($rating) {
			case 0:
				$query .= '>= '.self::LIB;
				break;
			case 1:
				$query .= '>= '.self::MOD.' and '.self::F_rating.' <= '.self::LIB;
				break;
			case 2:
				$query .= '<= '.self::MOD.' and '.self::F_rating.' >= '.self::CON;
				break;
			case 3:
				$query .= '<= '.self::CON;
				break;
		}
		$query .= ' and '.self::F_special.' = \'Y\'';

		return $this->datastore->get($query);
	}
}
