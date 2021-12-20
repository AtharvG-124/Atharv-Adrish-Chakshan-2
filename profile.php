<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap%27');
        .content{
            padding-top: 150px;
            display: block;
        }

        h1 {
            color: white;
        }
        p {
            color: white;
        }
    </style>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="signin">
        <div class="profile">
            <div class="profile_pic">
                <img
                src="assets/profile_pic.jpeg"
                alt="Have a good lunch!"
                />
            </div>
            <div class="main">

                <?php
                    if (isset($_SESSION["useruid"])) {
                        // echo "before connection";

                        require_once 'connectionInfo.php';
                        $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        // echo "after connection";
                        $username = $_SESSION["useruid"];
                        $sql = "SELECT * FROM users WHERE usersUid=?";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<h1>Hello " . $row["usersFirstName"] . "!<h1/>";
                                echo "<hr>";
                                echo "<p>Full Name: " . $row["usersFirstName"] . " " . $row["usersLastName"] . "<p/>";
                                echo "<p>Id Number: " . $row["usersIdNum"] . "<p/>";
                                echo "<p>Username: " . $row["usersUid"] . "<p/>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        // echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                    }
                ?>
            
            </div>
        </div>
        
        <div class="order-table">
            <hr class="divide">
            <h2>Your Orders</h2>
            
            <table>
                <tr>
                    <th class="table-label">Date of Order</th>
                    <th class="table-label">Menu Item Choosen</th>
                </tr>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        // echo "before connection";
                        $serverName = "localhost";
                        $dBUsername = "root";
                        $dBPassword = "";
                        $dBName = "luncheon";

                        $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        // echo "after connection";
                        $userId = $_SESSION["userid"];
                        $sql = "SELECT * FROM orders WHERE userId=?";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $userId);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th>" . $row["orderDate"] . "</th>";
                                echo "<th>" . $row["orderItem"] . "</th>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        // echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                    }
                ?>

                
            </table>
            <div class="signup">
                <a href="calendar.php"><button class="button2">Add to your orders!</button></a>
            </div>
        </div>
    </div>



</body>
</html>

    