<?php
    $connection = mysqli_connect("localhost", "root", "", "calendardb", 3306);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['insert'])) {
            $date = $_POST['dateSelected'];
            $meal = $_POST['meal'];
            $idnum = (int) $_POST['idnum'];
            
            //Embedded SQL
            $query = "INSERT INTO testTable (date, meal, idnum) VALUES (\"date\", \"$meal\", $idnum)"; 
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