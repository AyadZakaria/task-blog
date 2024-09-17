<?php
$name = $_POST['name'];
$email = $_POST['email'];

if (empty($name) || empty($email)) {
    echo "Please enter a valid data";
} else {
    echo "Name : " . $name . ", Email : " . $email;
}
