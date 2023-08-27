<?php
$servername = "localhost";
$username = "root";
$password = "";
$database= "testing";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$res = array();
$sql = mysqli_query($conn,"SELECT * FROM users_details WHERE name LIKE '%".$name."%';");


while($row = mysqli_fetch_assoc($sql)) {
    
    $ad['name']= $row['name'];
    $res[]=$ad;
echo json_encode(array("data" => $res));

}

?>