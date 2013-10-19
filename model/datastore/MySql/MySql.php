<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//require_once($_SERVER['DOCUMENT_ROOT'] . '/model/datastore/MySql/config.php');
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
              /*  $con = mysql_connect($this->dbHost, $this->dbUser, $this->dbPwd, true);
//              mysql_select_db($this->dbName, $con) or die( "Unable to seledddct database " . $this->dbHost.':'.$this->dbName);
                $status = mysql_select_db($this->dbName, $con);
                if (!$status) {
                    die( "Unable to seledddct database " . $this->dbHost.':'.$this->dbName);
                }
                $result = mysql_query($query, $con);
                if(!$result) {
                        mysql_close($con);
                        //die("Operation DB_READ Could not be Completed : ".mysql_error());
                        return false;
                }
                mysql_close($con);
                return $this->makeArray($result);*/

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
                mysqli_free_result($mysql_result);//check this :Salil
                return $returnArray;
        }

        public function insert($query) {
           /*     $con = mysql_connect($this->dbHost, $this->dbUser, $this->dbPwd, true);
                mysql_select_db($this->dbName, $con) or die( "Unable to select database through DB class");
                if(!mysql_query($query, $con) ) {
                        mysql_close($con);
                        //die("Operation DB_WRITE could not be completed : ".mysql_error());
                        return false;
                }
                return mysql_insert_id();*/

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

        /*
        //  TRANSACTION HANDLING //
        public function transactionStart() {
                $this->transactionQueries = array();
                $this->transactionUpdateQueries = array();
        }
        public function transactionExec($query, $update=false) {
                if($query) {
                        $this->transactionQueries[] = $query;
                        $this->transactionUpdateQueries[] = $update;
                }
        }
       public function transactionCommit() {

                try {
                        $dbh = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPwd);

                        /*** set the PDO error mode to exception ***/
       /*         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $dbh->beginTransaction();

                foreach($this->transactionQueries as $key => $value) {

                        $result = $dbh->exec($value);
                        if($this->transactionUpdateQueries[$key] && $result!=1)
                                throw new PDOException('Update Query Failed');
                }

                /*** commit the transaction ***/
           /*     $dbh->commit();
                }
                catch(PDOException $e)
                {
                        $dbh->rollBack();
                        echo $e->getMessage();
                        return false;

                }
                $dbh = null;
                return true;
        }*/

}
