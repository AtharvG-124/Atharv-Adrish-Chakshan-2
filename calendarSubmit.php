<?php
    require_once "login.php";
    include_once "calendar.html";

    // $connection = mysqli_connect("localhost", "root", "", "calendardb");
    $connection = mysqli_connect($host, "root", "", "calendardb");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['insert'])) {
            $dateSelected = (string) $_POST["dateSelected"];
            $meal = (string) $_POST['meal'];
            $idnum = (int) $_POST['idnum'];
            
            // Deubgging
            // echo "<script type = \"text/javascript\"> alert(\"$dateSelected\") </script>";

            //Embedded SQL
            $query = "INSERT INTO testtable(idnum, dateSelected, meal) VALUES ($idnum, \"$dateSelected\", \"$meal\")"; 
            // $query = "INSERT INTO testTable(idnum, dateSelected, meal) VALUES (:idnum, :dateSelected, :meal)"; 
            // $query->bindParam(':idnum', $idnum);
            // $query->bindParam(':dateSelected', $dateSelected);
            // $query->bindParam(':meal', $meal);
            // $query->execute();
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                echo "<script type = \"text/javascript\"> alert(\"Your order has been recorded.\") </script>";
            }
            else
            {
                echo "<script type = \"text/javascript\"> alert(\"Your order has not been recorded!\") </script>";
            }

        }
    }
?>