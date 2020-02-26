<?php


class Users extends Controller
{
    public function login(){
        $this->view('users/login');
    }

public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo 'Lmao I yeeted your data into the void';
            //Process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'pass' => trim($_POST['pass']),
                'pass2' => trim($_POST['pass2']),
                'name_err' => '',
                'email_err' => '',
                'pass_err' => '',
                'pass2_err' => '',
            );
            //validate name
            if (empty($data['name'])){
                $data['name_err'] = 'Please enter a name';
            };
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        } else {
            echo 'No Memes for you';
        }
        //validate email
    if (empty($data['email'])){
        $data['email_err'] = 'Please enter a valid E-mail';
    };
    //validate pass
    if (empty($data['pass'])){
        $data['pass_err'] = 'Please enter an actual password';
    } else if (strlen($data['pass'] < 6)){
        $data['pass_err'] = 'Password length atleast 6';
    }
    //validate pass2
    if (empty($data['pass2'])){
        $data['pass2_err'] = 'Please type something';
    } else if ($data['pass'] != $data['pass2']) {
        $data['pass2_err'] = 'Passwords dont match';
    }
    $this->view('users/register', $data);
}
}