<?php
class  RegisterController
{  

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }
    




    public function index()
    
     {
        if (isPostRequest()) 
        { 
            
            $user = $this->userModel->create($_POST); 
            if($user){
                redirect("login");   
            }
            
            // handle register request $_POST
        } else {
            return view("register");
        }
    }
}
