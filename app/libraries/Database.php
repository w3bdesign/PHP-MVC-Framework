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

    // TODO: 
    private $dbStatement;
    //private $dbError;

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

    // Prepare statement with query
    public function query($sqlQuery)
    {
        $this->dbStatement = $this->dbHandler->prepare($sqlQuery);
    }

    // Bind values
    public function bind($parameter, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->dbStatement->bindValue($parameter, $value, $type);
    }

    // Execute the prepared statement
    public function execute()
    {
        return $this->dbStatement->execute();
    }

    // Get result set as array of object
    public function resultSet()
    {
        $this->execute();
        return $this->dbStatement->fetchAll(PDO::FETCH_OBJ);
    }

    // Return a single result as an object
    public function singleResult()
    {
        $this->execute();
        return $this->dbStatement->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount()
    {
        return $this->dbStatement->rowCount();
    }
}
