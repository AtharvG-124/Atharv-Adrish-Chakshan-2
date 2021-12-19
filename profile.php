<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class=content>
        <h1>Profile Page</h1>
        <!-- <p>test</p> -->
        

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
                $username = $_SESSION["useruid"];
                $sql = "SELECT usersFirstName FROM users WHERE usersUid=?";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result = $stmt->get_result();

                // $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p>Hello " . $row["usersFirstName"] . ".<p/><br/>";
                      }
                } else {
                    echo "0 results";
                }
                $conn->close();
                // echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        ?>
    </div>


</body>
</html>

    