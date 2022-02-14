<?php
// Create new user

if (isset($_POST['create'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fname = mysqli_real_escape_string($connection, $fname);
    $lname = mysqli_real_escape_string($connection, $lname);
    $email = mysqli_real_escape_string($connection, $email);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "INSERT into users (fname,lname,email,username,password) VALUES ('$fname','$lname','$email','$username','$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Failed to create user" . mysqli_connect_error());
    } else {
        echo "User Created Successfully";
    }
}
