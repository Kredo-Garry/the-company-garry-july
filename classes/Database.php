<?php

    class Database{
        private $server_name = "localhost"; //XAMPP or MAMP that's in our computer
        private $username = "root";
        private $password = ""; // add "root" for MAC
        private $db_name = "the_company_july";
        protected $conn;

        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

            if ($this->conn->connect_error) {
                die("Unable to connect to database: " . $this->conn->connect_error);
            }
        }
    }