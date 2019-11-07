<?php
/*
* PDO Database Class
* Connect to database
* Create prepared statements
* Bind values
* Return rows and results
*/

declare(strict_types=1);

final class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbHandler;
    private $dbStatement;
    private $dbError;

    public function __construct()
    {

        // Set DSN
        $dbDsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $dbOptions = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO instance
        try {
            $this->dbHandler = new PDO($dbDsn, $this->user, $this->pass, $dbOptions);
            //Database connected

        } catch (PDOException $pdoError) {
            $this->error = $pdoError->getMessage();
            throw new Error($this->error);
        }
    }
}
