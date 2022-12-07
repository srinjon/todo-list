<?php
function make_connection(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="TODO";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $conn;
// echo "Connected successfully";
}
function add_items($value){
  $conn=make_connection();
  $query="INSERT INTO todolist(id,item,status) VALUES(NULL,'$value','0')";
  $conn->query($query);
}
function get_items(){
  
    $conn=make_connection();
    $query="SELECT id,item from todolist WHERE status='0'";
    $result=$conn->query($query);
    return $result;
    // print_r($result);
}
function get_items_checked(){
  
  $conn=make_connection();
  $query="SELECT id,item from todolist WHERE status='1'";
  $result=$conn->query($query);
  return $result;
  // print_r($result);
}
function update_items($id){
  $conn=make_connection();
    $query="UPDATE todolist set status='1' WHERE id='$id'";
    $result=$conn->query($query);

}
function delete_items($id){
  $conn=make_connection();
    $query="DELETE from todolist WHERE id='$id'";
    $result=$conn->query($query);

}

// Create connection


// Check connection

?>