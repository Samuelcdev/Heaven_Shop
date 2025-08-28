<?php
namespace Database\Seeders;

use App\Core\Database;
use PDO;
use Faker\Factory as Faker;

class CategorySeeder
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

        $sql = "INSERT INTO categories ( 
                name_category,
                description_category 
                ) VALUES (
                :name_category,
                :description_category);";

        $stmt = self::getConnection()->prepare($sql);

        for ($i = 0; $i < $count; $i++) {
            $stmt->execute([
                ':name_category' => $faker->words(2, true),
                ':description_category' => $faker->sentence(10)
            ]);
        }

        echo "Insertadas $count categorias a la base de datos de prueba \n";
    }
}