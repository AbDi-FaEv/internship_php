<?php
namespace Database;

class Database
{
    /**
     * This array contains the necessary parameters for connecting to the database.
     * @var array $config
     */
    private $config = [
        'host' => 'localhost',
        'user' => '',
        'password' => '',
        'database' => '',
    ];

    /**
     * This variable contains an instance of the PDO class.
     * @var \PDO $connection
     */
    private $connection;

    /*
     * Set new PDO object into $connection using $config
     */
    public function __construct($config = null) {}

    /*
     * Set $connection to NULL
     */
    public function __destruct() {}

    /**
     * This method execute $inputQuery on $connection and return a result of execution.
     *
     * @param string $inputQuery
     * @param array $data
     *
     * @return mixed
     */
    public function execute($inputQuery, $data = null) {}
}