<?php
header('content-type: application/json');

$data = json_decode(file_get_contents("php://input"));

$name = $data->sname;
$age = $data->sage;
$city = $data->scity;

include "config.php";

// array('message' => 'Student Record Inserted.', 'status' => true)

$sql = "INSERT INTO students(student_name, age, city) VALUES ('{$name}', {$age}, '{$city}')";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true));
}else{
 echo json_encode(array('message' => 'Student Record Not Inserted.', 'status' => false));
}
?>
