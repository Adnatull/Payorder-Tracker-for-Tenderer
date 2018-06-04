<?php

class Login {
    private $db_connection = null;
    public $errors = array();
    public $messages = array();
    

    private static $instance;
    
    public function __construct() {

        if (isset($_POST['login'])) {            
            $this->dologin();
        }
    }

    public static function getLogin() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
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
                $data = Session::getStart();
                $data->username = $userdata->username;
                $data->role = $userdata->role;
                $data->id = $userdata->id;
                $data->logged_in = TRUE;
                header("Location: index.php");
            } else {
                array_push($this->errors, "Wrong username/password! Try again.");
            } 
        } else {
            array_push($this->errors, "Database connection error!");
        }
    }

    public function listUsers() {
        if ($this->db_connection == null) {
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
        $sql = "SELECT * FROM users";
        $result = $this->db_connection->query($sql);
        $userdata = $result->fetch_object();
        return $userdata;
    }
}
?>