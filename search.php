<?php
    require_once 'login.php';
    include_once 'admin.html';
    // $connection = mysqli_connect($host, $user, $pass, $db);
    $connection = mysqli_connect("localhost", "root", "", "calendardb");
    if($connection->connect_error){ 
        die($connection->connect_error);
    }
    $option = isset($_POST['meal']) ? $_POST['meal'] : false;
    $str = "Please enter a filter";
    $hmbr = "Hamburger";
    if($option){
        
        // Debugging #1
        echo "<script type = \"text/javascript\"> alert(\"$option\") </script>";

        $request = $_POST['meal'];
        echo $request;


        $query = "SELECT idnum, dateSelected, meal FROM testTable"; 
        // -- WHERE meal == \"$hmbr\""; 
        // WHERE meal == " . $request;
        $result = mysqli_query($connection, $query);
        
        echo '<h3>';
        while ($row = mysqli_fetch_assoc($result)){
            echo "Student ID: " . $row['idnum'] . "   Date: " . $row['dateSelected'] . "   Meal: " . $row['meal'] . '<br>';
        }
        echo '</h3>';
    }
    else{
        echo "<script type = \"text/javascript\"> alert(\"$str\") </script>";
    }
?>