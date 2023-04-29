<?php
$con = mysqli_connect("localhost", "root", "", "test1");

$flag = $_POST["flag"];

if ($flag == "insert") {
    $name = $_POST["name"];
    $mail = $_POST["email"];

    $sql = "insert into test(name,email) values ('$name','$mail')";
    if (mysqli_query($con, $sql)) {
        echo 1;
    } else {
        echo 0;
    }
}

if ($flag == "update") {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $mail = $_POST["email"];

    $sql = "update test set name='$name' , email='$mail' where id=$id";

    if (mysqli_query($con, $sql)) {
        echo 1;
    } else {
        echo 0;
    }
}

if ($flag == "delete") {
    $id = $_POST['id'];

    $sql = "delete from test where id=$id";

    if (mysqli_query($con, $sql)) {
        echo 1;
    } else {
        echo 0;
    }
}

if ($flag == "select") {
    $sql = "select * from test";

    $result = mysqli_query($con, $sql);
    $data = "";

    if (mysqli_num_rows($result) > 0) {
        $data = "<table border=1>
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>E-mail</td>
    <td>Edit</td>
    <td>Delete</td>
    </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $data .= "<tr>
        <td>{$row["id"]}</td>
        <td>{$row["name"]}</td>
        <td>{$row["email"]}</td>
        <td><button class='edit-btn' data-id='{$row["id"]}'>Edit</button></td>
        <td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
        }
        $data .= "</table>";
    }
    mysqli_close($con);
    echo $data;
}
