<?php
$name=$_POST["name"];
$mail=$_POST["email"];

$con=new mysqli("localhost","root","","test1");

$sql="insert into test(name,email) values ('$name','$mail')";

if($con->query($sql)){
echo 1;
}else{
    echo 0;
}

?>