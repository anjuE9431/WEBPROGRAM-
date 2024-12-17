<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection falied".$conn->connect_error);
}
else
{
echo("connected");
}
$sql="CREATE TABLE mca (
    first_name VARCHAR(70),
    phone INT,
    last_name VARCHAR(56),
    email VARCHAR(80)
)";

if($conn->query($sql) === TRUE)
{
echo "table creating successfully ";
}
else
{
echo "error creating :".$conn->error;
}
$ine="insert into mca(first_name,phone,last_name,email)values('manu',12234,'anil','anju@gmail.com')";
if($conn->query($ine) === TRUE)
{
echo "insert successfully ";
}
else
{
echo "error creating :".$conn->error;
}
$conn->close();
?>