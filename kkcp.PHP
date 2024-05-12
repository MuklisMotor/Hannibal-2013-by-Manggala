<?php

$con = mysqli_connect('localhost', 'root', '','data');

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];


$sql = "INSERT INTO  'data_masuk' ('Id', 'fldName', 'fldEmail', 'fldPhone', 'fldMessage') VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}   

?>