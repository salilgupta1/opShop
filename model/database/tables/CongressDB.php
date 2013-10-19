<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/model/datastore/DataStore.php');

class CongressDB{
	public $datastore;

	const t_name = 'congress_db';
	//cons of all the fields

	function __construct(){
		$this->datastore = new DataStore();
	}

	// all the functions to manipulate the data....
}

