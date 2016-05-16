<?php namespace Acme\Controllers;
use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getShowHomePage()
    {
        // echo $this->twig->render('home.html');
        echo $this->blade->render("home");
    }

}