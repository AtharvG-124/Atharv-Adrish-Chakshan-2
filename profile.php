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
        <p>test</p>
        

        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        ?>
    </div>


</body>
</html>

    