<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
      // Set DSN
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
      $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      // Create PDO instance
      try{
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }

    // Prepare statement with query
    public function query($sql){

       $this->stmt = $this->dbh->prepare($sql);
    }

    // Bind values
    public function bind($param, $value){

      $this->stmt->bindValue($param, $value);
    }

    // Execute the prepared statement
    public function execute(){
      return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function All(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function ById(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount(){
      return $this->stmt->rowCount();
    }

    public function getRow($id,$table){
    $this->query("SELECT * FROM $table WHERE id =$id ");
    return $this->ById();

    }
    public function deleteRow($id,$table){
      $this->query("DELETE FROM $table WHERE id = $id ");
      $this->execute();

    }

    public function addfeild($table, $fileds)
  
    {

        $keys = array_keys($fileds);
        $values = array_values($fileds);
        $keys_values = implode(',' , $keys);
    
      $sign = str_repeat('?,', count($fileds) -1 ) . '?';

    $sql = "INSERT INTO {$table} ({$keys_values}) VALUES ({$sign})";
    $this->query($sql);
    $this->stmt->execute($values);
    }

// i will complete it
public function updateRow($table, $fileds,$id)
{
  $set = '';
  $x   = 1 ;
  foreach($fileds as $name => $value) {
    
    $set .= "{$name} = ? ";
    if($x < count($fileds)) {
      $set .= ',';
    }
    $x++;
  }
  $values = array_values($fileds);
  $sql = "UPDATE {$table} SET {$set}  WHERE id = {$id} ";
  
  $this->query($sql);
  $this->stmt->execute($values);
  }
}