<?php
    require_once 'connectionInfo.php';
    include_once 'admin.php';
    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


    if($conn->connect_error){ 
        die($conn->connect_error);
    }
    $option = isset($_POST['meal']) ? $_POST['meal'] : false;
    $str = "Please enter a filter";
    // $hmbr = "Hamburger";
    if($option){
        
        // Debugging #1
        // echo "<script type = \"text/javascript\"> alert(\"$option\") </script>";

        $request = $_POST['meal'];
        // echo $request;


        $query = "SELECT orders.orderItem, orders.orderDate, users.usersFirstName, users.usersLastName, users.usersIdNum, users.usersUid  
                    FROM orders, users 
                    WHERE ((orders.userId = users.usersId) and (orderItem LIKE \"%{$request}%\"))
                    ORDER BY orders.orderDate"; 
        // -- WHERE meal == \"$hmbr\""; 

        // WHERE meal == " . $request;
        $result = mysqli_query($conn, $query);
        // $result = $conn

        // echo '<h3>';
        // while ($row = mysqli_fetch_assoc($result)){
        //     echo "Student ID: " . $row['usersIdNum'] . "   Date: " . $row['orderDate'] . "   Meal: " . $row['orderItem'] . '<br>';
        //     // echo "Meal: " . $row['orderItem'] . '<br>';
        // }
        // echo '</h3>';



        if ($result->num_rows > 0) {
            echo "<p class = 'table-row'> " . $result->num_rows . " results </p>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th class='table-row'>" . $row['usersFirstName'] . "</th>";
                echo "<th class='table-row'>" . $row['usersLastName'] . "</th>";
                echo "<th class='table-row'>" . $row['usersUid'] . "</th>";
                echo "<th class='table-row'>" . $row['usersIdNum'] . "</th>";
                echo "<th class = 'table-row'>" . $row["orderDate"] . "</th>";
                echo "<th class = 'table-row'>" . $row["orderItem"] . "</th>";
                echo "</tr>";
            }
        } else {
            echo "<p class = 'table-row'> 0 results </p>";
        }


    }
    else{
        echo "<script type = \"text/javascript\"> alert(\"$str\") </script>";
    }
?>