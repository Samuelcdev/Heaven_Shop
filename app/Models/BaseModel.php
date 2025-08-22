<?php

namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

class BaseModel
{
    protected static string $table;
    protected static string $primaryKey;
    protected static PDO $connection;

    protected static function getConnection()
    {
        if (!isset(self::$connection)) {
            self::$connection = Database::getConnection();
        }
        return self::$connection;
    }

    public static function getAll()
    {
        try {
            $sql = "SELECT * FROM " . static::$table;

            $stmt = self::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $error) {
            throw new \Exception("Database error: " . $error->getMessage());
        }
    }

    public static function getById(int $id)
    {
        try {
            $sql = "SELECT * FROM " . static::$table . " WHERE " . static::$primaryKey . " = :id";

            $stmt = self::getConnection()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $error) {
            throw new \Exception("Database error: " . $error->getMessage());
        }
    }

    public static function insert(array $data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));

            $sql = "INSERT INTO " . static::$table . "($columns) VALUES ($placeholders)";

            $stmt = self::getConnection()->prepare($sql);
            foreach ($data as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
            $stmt->execute();
            $result = self::getConnection()->lastInsertId();
            return $result;
        } catch (PDOException $error) {
            throw new \Exception("Database error: " . $error->getMessage());
        }
    }

    public static function updateById(int $id, array $data)
    {
        try {
            $setClause = implode(",", array_map(fn($key) => "$key = :$key", array_keys($data)));

            $sql = "UPDATE " . static::$table . " SET $setClause WHERE " . static::$primaryKey . " = :id";

            $stmt = self::getConnection()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            foreach ($data as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
            $stmt->execute();
            $result = $stmt->rowCount();
            return $result;
        } catch (PDOException $error) {
            throw new \Exception("Database error: " . $error->getMessage());
        }
    }

    public static function deleteById(int $id)
    {
        try {

            $sql = "DELETE FROM " . static::$table . " WHERE " . static::$primaryKey . " = :id";

            $stmt = self::getConnection()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->rowCount();
            return $result;
        } catch (PDOException $error) {
            throw new \Exception("Database error: " . $error->getMessage());
        }
    }
}