<?php
    require_once "login.php";
    include_once "index.html";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if($conn->connect_error) die($conn->connect_error);

    $first = (string) $_POST['first_name'];
    $last = (string) $_POST['last_name'];
    $id = (int) $_POST['id_num'];
    $user = (string) $_POST['username'];
    $pwd = (string) $_POST['password'];

    $sql = "INSERT INTO user_table (first_name, last_name, id_num, username, passkey)
    VALUES (\"$first\", \"$last\", $id, \"$user\", \"$pwd\")";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>