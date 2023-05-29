<?php 

     require "Model/Banco.php";

     class User {
          private $id;
          private $cpf;
          private $firstname;
          private $lastname;
          private $email;
          private $phone;
          private $gender;
          private $birth_date;
          private $password;
          private $created_at;
     

          public function getUserId(){
               return $this->id;
          }

          public function getUserCpf(){
               return $this->cpf;
          }

          public function getUserFirstname(){
               return $this->firstname;
          }

          public function getUserLastname(){
               return $this->lastname;
          }

          public function getUserEmail(){
               return $this->email;
          }

          public function getUserPhone(){
               return $this->phone;
          }

          public function getUserBirthDate(){
               return $this->birth_date;
          }


          public function getUserGender(){
               return $this->gender;
          }

          public function getUserCreatedAt(){
               return $this->created_at;
          }

          public function setUserId($id){
               $this->id =$id;
          }
          

          public function setUserCpf($cpf){
               $this->cpf =$cpf;
          }
          
          public function setUserFirstname($firstname){
               $this->firstname = $firstname;
          }

          public function setUserLastname($lastname){
               $this->lastname = $lastname;
          }

          public function setUserEmail($email){
               $this->email = $email;
          }

          public function setUserPhone($phone){
               $this->phone = $phone;
          }

          public function setUserBirthDate($birth_date){
                $this->birth_date = $birth_date;
          }

          public function setUserGender($gender){
               $this->gender = $gender;
          }

          public function setUserPassword($password){
               $this->password = $password;
          }

          public function setCreatedAt($created_at){
               $this->created_at = $created_at;
          }

          public function createUser(){
               try{
                    $banco = Banco::getConexao();
                    $sql = $banco->prepare("insert into  dblendarioairlines.user (firstname, lastname, email,number, password) values (:firstname, :lastname, :email, :number, :password)");
                    $sql->bindParam("firstname",$firstname);
                    $sql->bindParam("lastname",$lastname);
                    $sql->bindParam("email",$email);
                    $sql->bindParam("number",$number);
                    $sql->bindParam("password",$password);
                    $firstname=$this->firstname;
                    $lastname = $this->lastname;
                    $email = $this->email;
                    $number  = $this->number;
                    $password  = $this->password;
                    $sql->execute();
                    echo "inserido com sucesso";
               }
                   catch(PDOException $e)
               {
                    echo "Connection failed: ". $e->getMessage();
               }
                
          }
     }

?>
