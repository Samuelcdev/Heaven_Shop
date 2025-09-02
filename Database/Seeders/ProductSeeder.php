<?php
namespace Database\Seeders;

use App\Core\Database;
use PDO;
use Faker\Factory as Faker;

class ProductSeeder
{
    protected static ?PDO $connection = null;
    public static function getConnection(): PDO
    {
        if (!isset(self::$connection)) {
            self::$connection = Database::getConnection();
        }
        return self::$connection;
    }

    public static function run(int $count)
    {
        $faker = Faker::create('es_ES');

        $sql = "INSERT INTO products (
                    name_product, 
                    description_product, 
                    status_product,
                    color_product,
                    size_product,
                    stock_product,
                    price_product,
                    id_category
                    ) VALUES (
                    :name_product,
                    :description_product,
                    :status_product,
                    :color_product,
                    :size_product,
                    :stock_product,
                    :price_product,
                    :id_category
                    );";

        $stmt = self::getConnection()->prepare($sql);

        for ($i = 0; $i < $count; $i++) {
            $stmt->execute([
                ':name_product' => $faker->words(3, true),
                ':description_product' => $faker->sentence(12),
                ':status_product' => $faker->randomElement(['Active', 'Inactive']),
                ':color_product' => $faker->colorName(),
                ':size_product' => $faker->randomElement(['S', 'M', 'L', 'XL']),
                ':stock_product' => $faker->numberBetween(0, 100),
                ':price_product' => $faker->numberBetween(2000, 90000),
                ':id_category' => $faker->numberBetween(1, 5)
            ]);
        }

        echo "Insertados $count productos a la base de datos de prueba \n";
    }
}