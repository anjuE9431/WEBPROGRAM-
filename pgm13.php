<?php
$servername="localhost";
$username="root";
$password="";
$dbname="books";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection falied".$conn->connect_error);
}
else
{
echo("connected");
}
$sql="CREATE TABLE details (
    id int(70),
    name INT,
    author VARCHAR(56),
    price VARCHAR(80)
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