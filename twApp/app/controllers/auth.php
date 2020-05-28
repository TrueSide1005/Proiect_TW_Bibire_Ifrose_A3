<?php

class Auth extends Controller
{
    public function index()
    {
        $this->view('home/index', []);
    }

    public function login()
    {

        $this->view('login/index', []);
        //if (isset($_POST['submit']) &&  $_POST['submit'] === 'Login') {
          
           // header('Location: http://localhost/twApp/');
       //}
    }


    public function register()
    {
     
         

        if (isset($_POST['submit']) &&  $_POST['submit'] === 'Sign in') {
            // we have a POST request
            
            $this->model('Registru', []);
            aduga();
           // header('Location: http://localhost/twApp/');

       }
       $this->view('register/index', []);
        
    }
}
