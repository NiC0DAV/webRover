<?php
    Class DataBase{
        private $connection;
        private $dbHost = 'localhost:3308';
        private $dbUser = 'root';
        private $dbPass = 2808;
        private $dbName = 'roveragricultor';

        public function __construct(){
            $this->connectDataBase();
        }

        public function connectDataBase(){
            $this->connection = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
            if(mysqli_connect_error()){
                die("Conexion Fallida". mysqli_connect_error() . mysqli_connect_errno());
            }
        }

        public function securityFunction($var){
            $return = mysqli_real_escape_string($this->con, $var);
            return $return;
        }

        public function createNewCrops($newCropName){
            $query = "INSERT INTO cultivos (nombreCultivo) VALUES ('$newCropName')";
            $execute = mysqli_query($this->conn, $query);    
    
            if($execute){
                return true;
            }else{
                echo 'No se logró hacer la insercion';
                return false;
            }
        }

        public function selectInformation(){
            $query0 = "SELECT nombreCultivo FROM cultivos";
            $query1 = "SELECT descripcion FROM cultivos";
            $query2 = "SELECT siemensXMetro FROM humedad";
            $query3 = "SELECT fotones FROM luminosidad";
            $query4 = "SELECT gradosCelsius FROM temperatura";
            $execute = mysqli_query($this->conn ,$query0 ,$query1, $query2, $query3, $query4);

            if($execute){
                return true;
            }else{
                return false;
            }
        }
    }
    echo '<h1>Hola</h1>';