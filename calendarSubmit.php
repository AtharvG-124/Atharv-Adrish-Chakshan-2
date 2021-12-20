<?php

if(isset($_POST['insert'])) {
    
    session_start();

    $dateSelected = (string) $_POST["dateSelected"];
    $meal = (string) $_POST['meal'];

    $userId = $_SESSION["userid"];
    echo "user id: " . $_SESSION["userid"];
    echo "username: " . $_SESSION["useruid"];
    echo "before";
    print_r($_SESSION);
    echo "after";

    require_once 'connectionInfo.php';

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "after connection";
    

    $sql = "INSERT INTO orders (orderDate, orderItem, userId) VALUES (?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ssi", $dateSelected, $meal, $userId);

    if($stmt->execute()) {
        header("location: calendar.php?error=none");
        exit();
    }
    else {
        header("location: calendar.php?error=somethingwentwrong");
        exit();
    }

    header("location: calendar.php");
    exit();

}
else {
    header("location: calendar.php");
    exit();
}