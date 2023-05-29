<?php 
    class Ticket{
        private $id;
        private $from;
        private $to;
        private $type;
        private $passenger;


        function __construct($from, $to, $type, $passenger){
            $this->from = $from;
            $this->to = $to;
            $this->type = $type;
            $this->passenger = $passenger;
        }

        public function getTicketId(){
            return $this->id;
        }

        public function getTicketFrom(){
            return $this->from;
        }

        public function getTicketTo(){
            return $this->to;
        }

        public function getTicketPrice(){
            return $this->price;
        }

        public function getTicketType(){
            return $this->type;
        }

        public function getTicketPassenger(){
            return $this->passenger;
        }

        public function setTicketId($id){
            $this->id = $id;
        }
  
        public function setTicketFrom($from){
          $this->from = $from;
        }

        public function setTicketTo($to){
         $this->to = $to;
        }

        public function setTicketPrice($price){
            $this->price = $price;
        }

        public function setTicketType($type){
            $this->type = $type;
        }

        public function setTicketPassenger($passenger){
            $this->passenger = $passenger;
        }
    }

?>