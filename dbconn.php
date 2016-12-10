<?php
/**
 * class for data conncection
 *this class will provide connection for data to other classes
 */
class DataBaseConn
{

  var  $dbhost = "heavenporn.cquso7v6xrs8.us-west-2.rds.amazonaws.com:3306";
  public $dbname = "world";
  public $password = "KMALIKk!12";
  public $dbuser = "khushiram";
  //$conn_String = "";


  function __construct()
  {
    # code...
  }
  public function set_Conn() {

    $conn = new mysqli($this->dbhost, $this->dbuser, $this->password,$this->dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
      return $conn;
    }
  }
  public function get_Conn() {

    return $this->set_Conn();

  }


}


 ?>
