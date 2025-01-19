<?php

// connect to MYSQL database and execute a query

class Database
{
   public $connection;
   public function __construct()
   {
      $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=2057;charset=utf8mb4";

      // Create a new PDO instance with the DSN
      $this->connection = new PDO($dsn);
   }

   public function query($query)
   {
      $statement = $this->connection->prepare($query);
      $statement->execute();

      return $statement;
   }
}
