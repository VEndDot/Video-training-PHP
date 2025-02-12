<?php 
    class DataBase{
        /*
            Подключение к базе данных 
            И чтетие ее данных
        */
        private $host = "localhost";
        private $username = "root";
        private $password = "";  
        private $db = 'mysite_db';

        function connect(){
            // подключаемся к БД
            $connection = mysqli_connect(
                $this->host,
                 $this->username,
                  $this->password,
                   $this->db
                );
            return $connection;
        }

        function read($query){
            $conn = $this ->connect();
            $result = mysqli_query($conn, $query);

            if(!$result){
                return false;
            }
            else{
                $data[] = null;
                while($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
                }
                return $data;
            }
        }

        function save($query){
            $conn = $this ->connect();
            $result = mysqli_query($conn, $query);
            if(!$result){
                return false;
            }
            else{
                return true;
            }

        }

    }

?>