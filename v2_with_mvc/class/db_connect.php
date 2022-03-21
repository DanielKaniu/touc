<?php
//
//Connect to the database;
class Db_connect {

    //
    //Properties.
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "toucan";
    //
    //Use pdo to establish the connection.
    public function connect() {
        //
        //Establish connection to database.
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->password);
        return $pdo;
    }

}