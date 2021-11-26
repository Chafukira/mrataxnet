<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->userModel = $this->model('Taxpayer');
        //$this->userModel->viewTaxpayers();
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }
    
    public function dashboard(){
         $this->view('pages/dashboard');   
    }

    public function login(){
        $data = [
            'fieldError' => ''
        ];
        $this->view('users/login',$data);
    }


    public function add(){
        $data = [
            'tpin'=> '',
            'businesscert'=> '',
            'tradename'=> '',
            'regdate'=> '',
            'number'=> '',
            'email'=> '',
            'location'=> '',
            'username'=> '',
            'fieldError'=> ''
        ];
        $this->view('pages/add',$data);
    }

    public function remove(){
        $data = [
            'tpin'=> '',
            'fieldError'=> ''
        ];
        $this->view('pages/remove',$data);
    }

    public function edit(){
        $data = [
            'tpin'=> '',
            'businesscert'=> '',
            'tradename'=> '',
            'regdate'=> '',
            'number'=> '',
            'email'=> '',
            'location'=> '',
            'username'=> '',
            'fieldError'=> ''
        ];  
    $this->view('pages/view');

    }

    public function getAll(){
       $display=[];
        $this->view('pages/getAll',$display);
    }
}
