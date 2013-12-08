<?php
/*
MySql class that does all CRUD operations with opShop_dev database
Potentially connect to a caching database that caches political opinions and previous users searches
*/
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once ('config.php');
class MySql
{
    public $dbHost;
    public $dbUser;
    public $dbPwd;
    public $dbName;

    function __construct(){
        $this->setDB(); //by default you will have to go the opshop db
    }

    protected function setDB($db=null) {
        $this->dbHost   = OPSHOP_DB_HOST;
        $this->dbUser   = OPSHOP_DB_USER;
        $this->dbPwd    = OPSHOP_DB_PWD;
        $this->dbName   = OPSHOP_DB_NAME;
    }
    public function read($query)   {
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName);
        if (mysqli_connect_errno($con))
        {
            die('ERROR! Could not connect to '.$this->dbName. ' '. mysqli_connect_error());
        }
        else
        {
            $result = mysqli_query($con,$query);
            if(!$result)
            {
                mysqli_close($con);
                return false;
            }
        }
        mysqli_close($con);
        return $this->makeArray($result);
    }

    protected function makeArray($mysql_result) {
            $returnArray = array();
            while($row = mysqli_fetch_assoc($mysql_result)) {
                    $returnArray[] = $row;
            }
            mysqli_free_result($mysql_result);
            return $returnArray;
    }

    public function insert($query) {
        $con =mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName);
        if (mysqli_connect_errno($con))
        {
            die('ERROR! Could not connect to '.$this->dbName. ' '. mysqli_connect_error());
        }
        if(!mysqli_query($con,$query))
        {
            mysqli_close($con);
            return false;
        }
        return mysqli_insert_id($con);
    }

    public function update($query) {
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName);
        if (mysqli_connect_errno($con))
        {
            die('ERROR! Could not connect to '.$this->dbName. ' '. mysqli_connect_error());
        }
        if(!mysqli_query($con,$query))
        {
            mysqli_close($con);
            return false;
        }
        mysqli_close($con);
        return true;
    }
}
