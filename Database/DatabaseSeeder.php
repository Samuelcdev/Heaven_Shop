<?php
namespace Database;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder
{
    public static function run()
    {
        echo "Iniciando el proceso de seeders...\n";

        CategorySeeder::run(5);
        ProductSeeder::run(50);

        echo "Proceso de seeders completado.\n";
    }
}