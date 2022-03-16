<?php


// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class HomeController
{
    private $ServerName = "localhost";
    private $UserName = "root";
    private $password = "";
    private $dbname = "train";
    private $conn;

    private $voyageModel;
    public function __construct()
    {
        $this->voyageModel = new Voyage();
    }


    public function index()
    {
        $filterage = implode(" and ", array_map(function ($key) {
            return "$key=:$key";
        }, array_keys($_GET)));

        if ($filterage !== "") {
            $query = " join train on train.id = trainId  where $filterage";
            $voyages = $this->voyageModel->fetchAllWithColumnRename($query, "*,voyage.id as voyageId, train.id as train_id",  $_GET);
            
            return view("home", ["voyages" => $voyages]);
        }
        view("home");
    }
}
