<?php

class Db
{
    /**
     * @return PDO - database connection
     */
    public static function getConnection()
    {
        $params_path = '/config/db_params.php';
        $params = include($params_path);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec('set names utf8');

        return $db;
    }
}