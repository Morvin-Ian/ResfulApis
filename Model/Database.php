<?php
  ini_set('display_errors',1);
  ini_set('display_errors',1);
  error_reporting(E_ALL);

    class db_connection{
        private $connection = null;
        private $db_host = 'localhost';
        private $db_name = 'REST';
        private $db_user = 'root';
        private $db_password = '';

        public function __construct()
        {
            if($this->connection == null){
                try{
              
                    $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user,$this->db_password);

                }catch(PDOException $e){
                    exit($e->getMessage());
                }

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connection;
            }
        }

        public function execution($sql){
            try{
                $statement = $this->connection->prepare($sql);
                if($statement==false){
                    throw new Exception("Unable to carry out query");
                }

                $statement->execute();
                return $statement;

            }catch(Exception $e){
                throw New Exception($e->getMessage());
            }
        }

        public function post_university($name, $location){
            $statement = $this->connection->prepare("INSERT INTO universities (name, location) VALUES(:name, :location)");
            $statement->bindValue(":name",$name);
            $statement->bindValue(":location",$location);
            $statement->execute();

        }


    };

  