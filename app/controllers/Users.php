<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function login() {
        $data = [
            'fieldError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'fieldError' => '',
            ];

            //Validating email and password
            if (empty($data['email']) && empty($data['password'])) {
                $data['fieldError'] = 'email and password can not be empty.';
            
            }
            else if(empty($data['email'])) {
                $data['fieldError'] = 'Please make sure you enter the email address.';
                }
            else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                 $data['fieldError'] = 'Please enter the correct email address format.';
                }
            else if(empty($data['password'])){
                 $data['fieldError'] = 'Please make sure you enter the password.';
                }

                //Check if all errors are empty
            else if (empty($data['fieldError'])) {
                    if($this->userModel->login($data['email'], $data['password'])){
                        
                        //taking the user to dashboard on login
                        header("Location: ".URLROOT.'/pages/dashboard'); 
                    }
                    else{
                        $data['fieldError'] = 'You have entered Wrong Username or Password.';
                        $this->view('users/login', $data);
                    }
                }
            else{$data['password']='Something went wrong.';}    
            
        } else {
            $data = [
                'fieldError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

   
    public function createUserSession($user) {
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout() {
        if(!isset($_SESSION['email'])){
            echo 'ok';
        }
        else{
            echo'kaya';
        }
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
}
}