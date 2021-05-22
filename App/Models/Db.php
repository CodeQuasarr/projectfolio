<?php 

namespace App\Models;

use PDO;

class Db extends PDO
{
    // instance unique de la classe
    private static $instance;
    // info connexion
    private const DBHOST = "localhost";
    private const DBNAME = "portefolio";
    private const DBUSER = "root";
    private const DBPASS = "";


    /**
     * Class constructor.
    */
    private function __construct() {
        
        $dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;


        try {
            parent:: __construct($dsn, self::DBUSER, self::DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // tableau associative
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     *  retrieve the instance of database
     *
     * @return self
     */
    public static function getIsntance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}