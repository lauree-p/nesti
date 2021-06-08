<?php

class Connection {

    static private $pdo = null;

    /**
     * Get the value of pdo
     * @return  PDO
     */
    public static function getPdo() {
        if (self::$pdo == null) {
            self::startConnection();
        }
        return self::$pdo;
    }

    static function startConnection() {
        self::$pdo = new PDO(DSN, USERNAME, PWD, [PDO::ATTR_PERSISTENT=>true]);
    }


}

?>