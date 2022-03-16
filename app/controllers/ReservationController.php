<?php


class  ReservationController
{

    private $voyageModel;
    private $reservationModel;
    public function __construct()
    {
        $this->voyageModel = new Voyage();
        $this->reservationModel = new Reservation();
    }


    public function create($voyageId)
    {
        $voyage = $this->voyageModel->fetchById($voyageId);
        if (!$voyage) {
            return redirect("/");
        }
        if (isPostRequest()) {
            // save reservation with $_POST
        } else {
            return view("reservation", ["voyageId" => $voyageId]);
        }

        // check if voyage exists
        // create reservation
        // redirection to user/reservation
    }
    public function update()
    {
    }
    public  function index()
    {
        echo "index methode";
    }
}
