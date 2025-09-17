<?php
Namespace App\Database;
use PDO;

require_once __DIR__ . '../../config.php';
require_once __DIR__ . '/../Helpers/helpers.php';
class Connection
{
    private static $conn = null;
    public function __construct(){}
    /**
     * Get PDO connection instance
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if (self::$conn === null) {
            try {
                $DSN = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
                self::$conn = new PDO(
                    $DSN,
                    DB_USER,
                    DB_PASSWORD,
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,         // fetch as object
                        PDO::ATTR_EMULATE_PREPARES   => false,                  // use real prepared statements
                        PDO::ATTR_PERSISTENT         => true                    // optional: persistent connection
                    ]
                );
            } catch (\PDOException $e) {
                // Handle error safely (log it, don't expose raw error to user)
                LogError("DB Error: " . $e->getMessage() . "\n");
                die("Database connection failed: make sure connection config is correct");
            }
        }
        return self::$conn;
    }
}