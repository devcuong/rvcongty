<?php
    class DB{
        public $con;
        protected $servername = "localhost";
        protected $username = "nghi8308_root";
        protected $password="cuong15031991";
        protected $dbname="nghi8308_congty";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_set_charset($this->con, 'UTF8');
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con,"SET NAMES 'utf-8'");
        }
    }
?>