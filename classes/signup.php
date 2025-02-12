<?php 

    class Signup
    {
        private $error = null;

        public function evaluate($data){
            foreach($data as $key => $value){
                if(empty($value)){
                    $this -> error .= $key . " is empty!<br/>";
                }
                if($key == "email"){
                    if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                        $this->error .= "Invalid email address!<br/>";
                    }
                }
                if($key == "first_name"){
                    if(is_numeric($value)){
                        $this->error .= "first name cant be a number<br/>";
                    }
                    if(strstr($value, " ")){
                        $this->error .= "first name cant have space<br/>";
                    }
                }
                if($key == "last_name"){
                    if(is_numeric($value)){
                        $this->error .= "last name cant be a number<br/>";
                    }
                    if(strstr($value, " ")){
                        $this->error .= "last name cant have space<br/>";
                    }
                }
            }
            if($this -> error == null){
                // no error
                $this -> create_user($data);
            }
            else{
                return $this -> error;
            }
        }

        public function create_user($data){
            $first_name = ucfirst($data['first_name']);
            $last_name = ucfirst($data['last_name']);
            $gender = $data['gender'];
            $email = $data['email'];
            $password = $data['password'];

            $user_id = $this -> createUser_id();
            $url_address = strtolower($first_name.".".$last_name);

            $query = "INSERT INTO users 
            (user_id, first_name, last_name, gender, email, password, url_address) 
            values 
            ('$user_id', '$first_name', '$last_name', '$gender', '$email', '$password', '$url_address')";
            
            $DB = new DataBase();
            $DB->save($query);
        }



        private function createUser_id(){
            $lenght = rand(4, 19);
            $number = "";
            for($i = 1; $i < $lenght; $i++){
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }
            return $number;
        }
    }
?>