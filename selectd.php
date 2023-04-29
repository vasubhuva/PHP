<?php

$con=new mysqli("localhost","root","","test1");

$sql="select * from test";
$result=$con->query($sql);
$data="";

if($result->num_rows>0){
    $data="<table border=1>
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>E-mail</td>
    <td>Delete</td>
    </tr>";

    while($row=$result->fetch_assoc()){
        $data.="<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["email"]}</td><td><button data-id='{$row["id"]}'>Delete</button></td></tr>";

    }
    $data.="</table>";

    $con->close();
    echo $data;
}

?>