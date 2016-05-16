<?php namespace Acme\Controllers;

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

    public function getShowPage() {
        echo "Foo";
    }
}