<?php
namespace App\Controllers;
use App\Core\BaseController;
class ProductController extends BaseController
{
    public function mainView()
    {
        $title = 'Productos';
        $layout = 'main';
        $this->view('Admin/productView', compact('title', 'layout'));
    }
}