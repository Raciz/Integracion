<?php

    function getPDO(){
        $host = DB_SERVER;
        $dbOpt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");
        $dbname = DB_DATABASE;
        $pdoObj = new PDO(
            "mysql:host={$host};dbname={$dbname};port=3306",
            DB_USER, DB_PASSWORD, $dbOpt
        );
        return $pdoObj;
    }

?>