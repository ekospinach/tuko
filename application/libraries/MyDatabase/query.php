<?php namespace MyDatabase;

use \Laravel\Config;

class Query {

    private $host;
    private $user;
    private $password;
    private $database;
    private $connection;

    /**
     * Setup conctruct
     */
    public function __construct()
    {
        // get the environment
        $conn = Config::get('database.connections.'.ENVIRONMENT);
        if ($conn) {
            $this->host = $conn['host'];
            $this->user = $conn['username'];
            $this->password = $conn['password'];
            $this->database = $conn['database'];
        } else {
            return "Error to retrieve connection from config";
        }
    }

    /**
     * Run Query
     * 
     * @param  string $sql
     * @return void
     */
    public function run($sql)
    {
        $this->connection = @mysql_connect($this->host, $this->user, $this->password);

        // try to setup connection
        try {
            if ( ! $this->connection) {
                throw new Exception("Connection error", 1);
            } else {
                try {
                    if ( ! @mysql_select_db($this->database, $this->connection)) {
                        throw new Exception("Error Processing DB", 1);
                    }
                } catch (Exception $m) {
                    echo " Error : ". $m->message();
                }
            }
        } catch (Exception $m) {
            echo " Error : ". $m->getMessage();
        }

        // try to run query
        if ($sql) {
            try {
                return mysql_query ($sql);
            } catch (Exception $m) {
                echo " Error : ". $m->getMessage();
            }
        }
    }
}