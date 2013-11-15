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
	//cons of all the fields

	const LIB 							= 85;
	const MOD 							= 50;
	const CON 							= 15;
	// cons of the rating delimiters

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
		$query = 'select '.self::F_fName.','.
						   self::F_lName.' from '.
						   self::T_name.' where '.self::F_rating.' ';
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
		$query .= ' and '.self::F_special.' = \'Y\' and rownum = '.$rownum;

		return $this->datastore->get($query);
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
	/*public function getOpposingCongressMen()
	{

	}*/
	//adding a hive job info to the Shmoop DB
	/*function addHiveQuery($queryName,$queryOwner,$queryDescription,$outputSchema,$queryUUID,$path,$queryStatus){
		$query = "insert into ".self::T_name."(".
					self::F_name.",".
					self::F_owner.",".
					self::F_description.",".
					self::F_uuid .",".
					self::F_outputSchema.",".
					self::F_path.",".
					self::F_queryStatus.") values ('".
					mysql_escape_string($queryName)."', '".
					mysql_escape_string($queryOwner)."','".
					mysql_escape_string($queryDescription)."', 0x".
					mysql_escape_string($queryUUID).",'".
					mysql_escape_string($outputSchema)."','".
					mysql_escape_string($path)."','".
					mysql_escape_string($queryStatus)."')";

		return $this->datastore->insertPid($query);
	}

	//Get all the job information from the db. and order by newest to older
	function getAllQueries()
	{
		$query = "select * from ".self::T_name." order by ".self::F_pid. " Desc";
		return $this->datastore->get(null, $query, null);
	}
	//Selects the jobStatus of the most recent job.
	function getQueryStatus()
	{
		$query = "Select ". self::F_queryStatus. ", ".
				self::F_path.
				" From ". self::T_name." Order by ".self::F_pid." DESC Limit 1";
		return $this->datastore->get(null,$query,null);
	}
	//get one job by its specific UUID
	function getHiveQueryByUUID($queryUUID){
		$query = "select ".self::F_name.",".
					self::F_owner.",".
					self::F_outputSchema.",".
					self::F_description.",
					hex(".self::F_uuid.") as ".self::F_uuid.",".
					self::F_path.", ".
					self::F_hivePath.",".
					self::F_queryStatus.",".
					self::F_update." from ".self::T_name."
					 where ".self::F_uuid."=0x".mysql_escape_string($queryUUID);

		return $this->datastore->get(null, $query, null);
	}
	//get hive script path of specific pid
	function getHiveScriptPathByPID($pid)
	{
		$query = "select ".self::F_hivePath." from ".self::T_name." where ".self::F_pid."=".mysql_escape_string($pid);
		return $this->datastore->get(null,$query,null);
	}
	//get hive output path of specific pid
	function getOutputPathByPID($pid)
	{
		$query = "select ".self::F_path." from ".self::T_name." where ".self::F_pid."=".mysql_escape_string($pid);
		return $this->datastore->get(null,$query,null);
	}
	//update script path of hive job by UUID
	function updatePathOfHiveScriptByUUID($queryUUID,$hivePath){
		$query = "update ".self::T_name." set ".
			self::F_hivePath."='".mysql_escape_string($hivePath)."'  ".
			" where ".self::F_uuid ."=0x".mysql_escape_string($queryUUID);
		return $this->datastore->set($query);
	}
	//update output path of hive job by uuid
	function updateOutputPathByUUID($queryUUID,$outputPath)
	{
		$query = "update ".self::T_name." set ".
			self::F_path."='".mysql_escape_string($outputPath)."'  ".
			" where ".self::F_uuid ."=0x".mysql_escape_string($queryUUID);
		return $this->datastore->set($query);
	}
	//update query status by UUID
	function updateQueryStatusByUUID($queryUUID,$queryStatus)
	{
		$query = "update ".self::T_name." set ".
			self::F_queryStatus."='".mysql_escape_string($queryStatus)."'  ".
			" where ".self::F_uuid ."=0x".mysql_escape_string($queryUUID);
		return $this->datastore->set($query);
	}*/
}
