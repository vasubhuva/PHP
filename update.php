<?php
$id=$_POST["id"];
$name=$_POST["name"];
$mail=$_POST["email"];

$con=new mysqli("localhost","root","","test1");

$sql="update test set name='$name' , email='$mail' where id=$id";

if($con->query($sql)){
echo 1;
}else{
    echo 0;
}

?>