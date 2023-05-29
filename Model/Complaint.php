<?php 
    class Complaint {
        private $id;
        private $plaintiff_name;
        private $plaintiff_cpf;
        private $plaintiff_phone;
        private $plaintiff_email;
        private $complaint_text;
        private $created_at;

        function __construct($plaintiff_name, $plaintiff_cpf, $plaintiff_phone, $plaintiff_email, $complaint_text){
            $this->plaintiff_name = $plaintiff_name;
            $this->plaintiff_cpf = $plaintiff_cpf;
            $this->plaintiff_phone = $plaintiff_phone;
            $this->plaintiff_email = $plaintiff_email;
            $this->complaint_text = $complaint_text;
        }

        public function getPlaintiffComplaintId(){
            Banco::conectar();
            return $this->id;
        }


        public function getPlaintiffComplaintName(){
            return $this->plaintiff_name;
        }

        public function getPlaintiffComplaintCpf(){
            return $this->plaintiff_cpf;
        }

        public function getPlaintiffComplaintPhone(){
            return $this->plaintiff_phone;
        }

        public function getPlaintiffComplaintEmail(){
            return $this->plaintiff_email;
        }

        public function getPlaintiffComplaintText(){
            return $this->plaintiff_text;
        }

        public function getUserCreatedAt(){
            return $this->created_at;
       }

        public function setPlaintiffComplaintId($id){
            $this->id = $id;
        }

        public function setPlaintiffComplaintName($name){
            $this->name =$name;
        }

        public function setPlaintiffComplaintCpf($cpf){
           $this->plaintiff_cpf = $cpf;
        }

        public function setPlaintiffComplaintPhone($phone){
           $this->plaintiff_phone = $phone;
        }

        public function setPlaintiffComplaintEmail($email){
          $this->plaintiff_email = $email;
        }

        public function setPlaintiffComplaintText($text){
            $this->plaintiff_text = $text;
        }

        public function setCreatedAt($created_at){
            $this->created_at = $created_at;
       }
  

        
    }
?>

Pegar todo o projeto, arrumar nas camadas
Fazer as classes no model 
criar o banco de dados
renomear todas as telas para .php
criar arquivo .htaccess
criar arquivo index.php