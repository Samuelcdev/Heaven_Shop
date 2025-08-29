<?php
namespace App\Models;
use App\Models\BaseModel;

class ProductModel extends BaseModel
{
    protected static string $table = 'products';
    protected static string $primaryKey = 'id_product';

    public function getAllProducts()
    {
        $result =  self::getAll();
        return $result;
    }
}