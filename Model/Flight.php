<?php
class Flight
{
    private $id;
    private $from_flight;
    private $to_flight;
    private $seats_qtd;
    private $seats_first_class_qtd;
    private $schedule;
    private $price;
    private $created_at;

    function __construct($from_flight, $to_flight, $seats_qtd, $seats_first_class_qtd, $schedule, $price)
    {
        $this->from_flight = $from_flight;
        $this->to_flight = $to_flight;
        $this->seats_qtd = $seats_qtd;
        $this->seats_first_class_qtd = $seats_first_class_qtd;
        $this->schedule = $schedule;
        $this->price = $price;
    }

    public function getFromFlight()
    {
        return $this->from_flight;
    }

    public function getToFlight()
    {
        return $this->to_flight;
    }

    public function getSeatsQtdFlight()
    {
        return $this->seats_qtd;
    }

    public function getSeatsFirstClassFlight()
    {
        return $this->seats_first_class_qtd;
    }

    public function getScheduleFlight()
    {
        return $this->schedule;
    }

    public function getPriceFlight()
    {
        return $this->price;
    }

    public function getUserCreatedAt()
    {
        return $this->created_at;
    }

    public function setFlightId($id)
    {
        $this->id = $id;
    }

    public function setFromFlight($from)
    {
        $this->from_flight = $from_flight;
    }

    public function setToFlight($to)
    {
        $this->to_flight = $to_flight;
    }

    public function setSeatsQtdFlight($seats_qtd)
    {
        $this->seats_qtd = $seats_qtd;
    }

    public function setSeatsFirstClassFlight($seats_first_class_qtd)
    {
        $this->seats_first_class_qtd = $seats_first_class_qtd;
    }

    public function setScheduleFlight($schedule)
    {
        $this->$schedule = $schedule;
    }

    public function setPriceFlight($price)
    {
        $this->$price = $price;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

}
?>