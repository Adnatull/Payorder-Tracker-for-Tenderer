<?php

class Create {
    private static $instance;

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    public function __construct() {
        if (isset($_POST['create'])) {
            $this->doCreate();
        }

    }

    public static function getCreateUser() {
        if(!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function doCreate() {
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
            $password1 = $this->db_connection->real_escape_string($_POST['confirm_password']);
            $role = $this->db_connection->real_escape_string($_POST['role']);
            $fullname = $this->db_connection->real_escape_string($_POST['fullname']);

            if (empty($username)) {
                array_push($this->errors, "Username is required");
            }
            if(empty($password)) {
                array_push($this->errors, "Password is required");
            }
            if(empty($role)) {
                array_push($this->errors, "User role is required");
            }
            if ($password != $password) {
                array_push($this->errors, "Password mismatch");
            }

            if (count($this->errors) == 0) {
                $sql = "INSERT INTO users(username, password, role, fullname) VALUES('$username', '$password', '$role', '$fullname')";
                $result = $this->db_connection->query($sql);
                if ($result) {
                    $data = Session::getStart();
                    
                    unset($data->create_user);
                    $data->current_page = "Dashboard";
                    
                    header("Location: index.php");
                } else {
                    array_push($this->errors, "username already exists");
                }
            }          
        } else {
            array_push($this->errors, "Database connection error!");
        }
    }
   
}