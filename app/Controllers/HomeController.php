<?php
namespace App\Controllers;
use App\Core\BaseController;

class HomeController extends BaseController
{
    public function homeView()
    {
        $title = 'Inicio';
        $layout = 'main';
        $this->view('Landing/homeView', compact('title', 'layout'));
    }
}