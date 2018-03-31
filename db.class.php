<?php
    class db {
    
        private $host = 'localhost';
        private $user = 'root';
        private $senha = '';
        private $database = 'vnm';
    
        public function conecta_mysql(){
            $con = mysqli_connect($this->host, $this->user, $this->senha, $this->database);

            if(mysqli_connect_errno()){
                echo 'Erro ao conectar ao banco de dados: '.mysqli_connect_error();
            }

            return $con;
        }
    }
?>