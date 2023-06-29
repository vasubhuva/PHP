<?php

echo "First name:" . $_POST["fname"] . "</br>";
echo "Last name:" . $_POST["lname"] . "</br>";
echo "Phone No.:" . $_POST["pno"] . "</br>";
echo "E-Mail:" . $_POST["mail"] . "</br>";
echo "Gender:". $_POST["gender"] . "</br>";

echo "<b>Cookie data</b></br>";
if(isset($_COOKIE["firstname"])){
    echo "Firstname:".$_COOKIE["firstname"]. "</br>";
}else{
    echo "Sorry!!! First names is not available</br>";
}

if (isset($_COOKIE["email"])) {
    echo "Email:".$_COOKIE["email"]."</br>";
} else {
    echo "Sorry!!! Email is not available</br>";
}