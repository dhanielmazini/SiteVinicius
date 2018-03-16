<?php

    class db{
        //host
        private $host = 'localhost';

        //usuario
        private $usuario = 'root';

        //senha
        private $senha = '';

        //banco de dados
        private $database = 'vnm';

        public function conect_mysql(){
            //criar a conexao
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);7

            //ajustar o charset de comunicacao entre a aplicação e o banco de dados
            mysqli_set_charset($con, 'utf8');

            //verificar se houve erro de conexao
            if(mysqli_connect_errno()){
                echo "Erro ao tentar se conectar ao BD MySQL: ".mysqli_connect_error();
            }
            
            return $con;
        }
    }

?>