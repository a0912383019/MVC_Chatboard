<?php

/** 
 * DB connect
 */
class DataAccess
{
    var $link_id;
    var $query_id;

    function __construct($_host = "localhost", $_user = "root", $_pass = "", $_db = "chatboard")
    {
        try {
            $this->link_id = new PDO(
                "mysql:host={$_host};dbname={$_db}",
                $_user,
                $_pass
            );
        } catch (PDOException $e) {
            echo "資料庫連接失敗！ <br>";
            echo "Error: " . $e->getMessage() . "<br>";
            exit;
        }
    }
}
