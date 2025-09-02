<?php
namespace App\Controllers;
use App\Core\BaseController;
use App\Models\ProductModel;
use PDOException;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function mainView()
    {
        try {
            $page = $_GET['page'] ?? 1;
            $perPage = 9;

            $products = $this->productModel->getAllProducts();
            $productsPaginated = $this->paginate($products, (int) $page, $perPage);

            $title = 'Productos';
            $layout = 'main';
            $this->view('Admin/productView', compact('title', 'layout', 'productsPaginated'));
        } catch (PDOException $error) {
            throw new PDOException("Error fetching products: " . $error->getMessage());
        }
    }
}