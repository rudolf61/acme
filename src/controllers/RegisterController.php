<?php namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\Validation\Validator;
use Acme\Models\User;


class RegisterController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getShowRegisterPage()
    {
        echo $this->blade->render("register");
    }


    public function postShowRegisterPage()
    {

        $validator = new Validator;
        $errors = $validator->isValid([
            'first_name' => ['min:3'],
            'last_name' => ['min:3'],
            'email' => ['email'],
            'verify_email' => ['email', 'equalsTo:email'],
            'password' => ['min:5'],
            'verify_password' => ['min:5', 'equalsTo:password']

        ]);


        if (sizeof($errors) > 0) {
            $_SESSION['msg'] = $errors;
            echo $this->blade->render('register');
            unset($_SESSION['msg']);
            exit();
        }


        $user = new User;
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->save();

        echo "Posted";
    }

    private function buildMap()
    {
        $result = [];
        foreach ($_POST as $name => $value) {
            $result[$name] = $value;
        }

        return $result;
    }

    public function getShowLoginPage()
    {
        echo $this->blade->render("login");
    }

}