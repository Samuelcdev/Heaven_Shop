<?php
namespace App\Models;
use App\Models\BaseModel;
use PDO;
use PDOException;

class ProductModel extends BaseModel
{
    protected static string $table = 'products';
    protected static string $primaryKey = 'id_product';

    public function getAllProducts()
    {
        try {
            $sql = "SELECT p.name_product, p.description_product, p.status_product, p.color_product, p.size_product, p.stock_product, p.image_product, p.price_product, c.name_category
                    FROM products p
                    JOIN categories c ON p.id_category = c.id_category";

            $stmt = self::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $result;
        } catch (PDOException $error) {
            throw new PDOException($error->getMessage(), (int) $error->getCode());
        }
    }
}