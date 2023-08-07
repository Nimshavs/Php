<?php
$servername="localhost";
$username="root";
$password= "";
$database="mydata";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Not Connected" .$conn->connect_error);
}
/*$sql="CREATE TABLE student(
    id INT(5) PRIMARY KEY,
    name VARCHAR(20),
    age INT(2))";*/

/*$sql="CREATE DATABASE mydata";
$sql="INSERT INTO student VALUES(1,'aleena',23);";
$sql ="INSERT INTO student VALUES(2,'nimsha',27);";
$sql .="INSERT INTO student VALUES(3,'dilsha',29);";
$sql .="INSERT INTO student VALUES(4,'nazah',21);";
$sql .="INSERT INTO student VALUES(5,'aby',25);";*/

$sql="UPDATE student SET name='bessy' WHERE id=1";
if($conn->query($sql)==TRUE){
    echo "Value updated successfully";
}
else{
    echo "Error updating table" ;
}
/*if($conn->multi_query($sql)==TRUE){
    echo "Value inserted successfully";
}
else{
    echo "Error creating table";
}*/

?>