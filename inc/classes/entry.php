<?php

class Entry {
    private static $instance;

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    public function __construct() {
        if (isset($_POST['entry'])) {
            $this->doEntry();
        }
        
    }

    public static function getEntry() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function doEntry() {
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db_connection->connect_error) {
            array_push($this->errors, "Connection Error");
        }

        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        if (!$this->db_connection->connect_errno) {
            $cdate = $this->db_connection->real_escape_string($_POST['date']);
            $particular = $this->db_connection->real_escape_string($_POST['particular']);
            $tenderid = $this->db_connection->real_escape_string($_POST['tenderid']);
            $payorderno = $this->db_connection->real_escape_string($_POST['payorderno']);
            $payorderamount = $this->db_connection->real_escape_string($_POST['payorderamount']);
            
            $data = Session::getStart();
            $uploadedby = $data->id;

            if (empty($cdate)) {
                array_push($this->errors, "Date is required");
            }
            if(empty($particular)) {
                array_push($this->errors, "Particular is required");
            }
            if(empty($payorderno)) {
                array_push($this->errors, "Payorder NO. is required");
            }
            if(empty($payorderamount)) {
                array_push($this->errors, "Payorder amount is required");
            }
            if(empty($uploadedby)) {
                array_push($this->errors, "You are not loggedin");
            }
            

            if (count($this->errors) == 0) {
                $sql = "INSERT INTO `payorder`( `particular`, `tenderid`, `createdby`, `payorderno`, `payorderamount`, `createddate`) VALUES ('$particular','$tenderid', '$uploadedby' ,'$payorderno','$payorderamount', '$cdate' )";
                $result = $this->db_connection->query($sql);
                if ($result) {
                                        
                    echo "OK inserted";
                    
                } else {
                    array_push($this->errors, "Something went wrong");
                }
            }          
        } else {
            array_push($this->errors, "Database connection error!");
        }
    }
}