<?php

class Login {
    private $db_connection = null;
    public $errors = array();
    public $messages = array();
    
    public function __construct() {

        if (isset($_POST['login'])) {            
            $this->dologin();
        }
    }
    private function dologin() {
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db_connection->connect_error) {
            array_push($this->errors, "Connection Error");
        }

        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        if (!$this->db_connection->connect_errno) {
            $username = $this->db_connection->real_escape_string($_POST['username']);
            $password = $this->db_connection->real_escape_string($_POST['password']);
            
            

            $sql = "SELECT * 
                    FROM users
                    WHERE username = '$username' AND password = '$password'; ";
            $result = $this->db_connection->query($sql);
            if ($result->num_rows == 1) {
                $userdata = $result->fetch_object();
                $data->username = $userdata->username;
                $data->role = $userdata->role;
                $data->logged_in = TRUE;
            } else {
                array_push($this->errors, "Wrong username/password! Try again.");
            } 
        } else {
            array_push($this->errors, "Database connection error!");
        }
    }
}
?>