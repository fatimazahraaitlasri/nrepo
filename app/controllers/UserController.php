<?php

class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User;
    }
    public function index()
    {
        // $user = $this->userModel->create($_POST);



        // view("user", );



    }
    public function reservation()
    {

    }
}


