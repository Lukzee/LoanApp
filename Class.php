<?php

class crud {
  public static function select($table, $arg, $conn){
    $quer=mysqli_query($conn, 'SELECT * FROM '.$table.' '.$arg);
    return $quer;
  }
  
  public static function insert($table, $arg, $conn){
    $quer=mysqli_query($conn, 'INSERT INTO '.$table.' SET '.$arg);
    return $quer;
  }
  
  public static function update($table, $arg, $conn){
    $quer=mysqli_query($conn, 'UPDATE '.$table.' SET '.$arg);
    return $quer;
  }
  
  public static function protect($conn, $string){
    $string=trim(strip_tags(htmlentities(htmlspecialchars(mysqli_real_escape_string($conn, $string)))));
    return $string;
  }
}
?>