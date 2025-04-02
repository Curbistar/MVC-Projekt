<?php

namespace Core;

use PDO;

class Model
{
    protected static $db;

    public static function connect($host, $dbname, $user, $password)
    {
        if (!self::$db) {
            self::$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }

    protected function query($sql, $params = [])
    {
        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}