<?php

namespace Framework\library;

use PDO;

abstract class Database
{
    private static string $host = '127.0.0.1';
    private static string $name = 'shop';
    private static string $user = 'admin';
    private static string $password = 'admin';
    private static array $settings = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    private static PDO $connection;

    private static function setDb()
    {
        if (!isset(self::$connection)) {
            self::$connection = new PDO(
                "mysql:host=".self::$host.";dbname=".self::$name,
                self::$user, self::$password, self::$settings
            );
        }
    }

    private static function getDb(): PDO
    {
        if (!isset(self::$connection)) {
            self::setDb();
        }

        return self::$connection;
    }

    public static function readAll(string $table): array
    {
        $sql = 'SELECT * FROM '.$table;
        $query = self::getDb()->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function read(string $table, string $condition, string $value): array
    {
        $sql = 'SELECT * FROM '.$table.' WHERE '.$condition.' = ?';
        $query = self::getDb()->prepare($sql);
        $query->execute([$value]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}