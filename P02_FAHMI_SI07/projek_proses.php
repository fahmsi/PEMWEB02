<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "123") {
    echo "CONGRATS !!! U get it !";
}else {
    echo "DUMB !!! try again !";
}