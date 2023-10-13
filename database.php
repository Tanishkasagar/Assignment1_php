<?php
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($name,$id,$age,$gender){
      $sql = "INSERT INTO Student_detail (name, id, age, gender) VALUES ('$name', '$id', '$age', '$gender')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM Student_detail";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
