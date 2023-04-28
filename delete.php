<?php
$id=$_POST["id"];

$con=new mysqli("localhost","root","","test1");

$sql="delete from test where id=$id";

if($con->query($sql)){
echo 1;
}else{
    echo 0;
}

?>