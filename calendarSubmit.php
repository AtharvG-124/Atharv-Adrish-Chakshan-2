<?php
    $connection = mysqli_connect("localhost", "root", "1234", "calendardb", 80);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['insert'])) {
            $meal = $_POST['meal'];
            $idnum = (int) $_POST['idnum'];
            
            //Embedded SQL
            $query = "INSERT INTO testTable (meal, idnum) VALUES (\"$meal\", $idnum)"; 
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