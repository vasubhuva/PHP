<?php

echo "First name:" . $_POST["fname"] . "</br>";
echo "Last name:" . $_POST["lname"] . "</br>";
echo "Phone No.:" . $_POST["pno"] . "</br>";
echo "E-Mail:" . $_POST["mail"] . "</br>";
echo "Gender:". $_POST["gender"] . "</br>";

if(isset($_COOKIE["firstname"])){
    echo "yes</br>";
}else{
    echo "no</br>";
}

if (isset($_COOKIE["email"])) {
    echo "yes</br>";
} else {
    echo "no</br>";
}