<?php
    class Connection extends PDO {

        const HOSTNAME = "";
        const USERNAME = "";
        const PASSWORD = "";
        const SCHEMA = "";
        const PORT = 5432;
        
        private $conn;

        # magic method
        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    }