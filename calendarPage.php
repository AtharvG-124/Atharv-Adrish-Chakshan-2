<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- <style> </style> -->

    <title>Your Calendar</title>
</head>
<!-- <body>
  <h1>Order Food</h1>

  
  
</body> -->

<body>

  <div class="nav_bar">

    <nav>
         <a href="index.html"><button class="logo">Luncheon</button></a>
         <a href="login.html" target="_parent"><button class="nav-button">Log In</button></a>
         <a href="About.html" target="_parent"><button class="nav-button">About</button></a>

     </nav>

  </div>

  <div class="container">
    <div class="calendar">
      <div class="month">
        <i class="fas fa-angle-left prev"></i>
        <div class="date">
          <h1></h1>
          <p></p>
        </div>
        <i class="fas fa-angle-right next"></i>
      </div>
      <div class="weekdays">
        <div>Sun</div>
        <div>Mon</div>
        <div>Tue</div>
        <div>Wed</div>
        <div>Thu</div>
        <div>Fri</div>
        <div>Sat</div>
      </div>
      <div class="days" onclick="openModal()"></div>
    </div>
  </div>



  <div id="myModal" class="modal">
    <!-- <p>Test</p> -->
    <div class="modal-content">

      <div class = "modal-header">
        <h2> Place Your Order </h2>
        <span class="close cursor" onclick="closeModal()">&times;</span>
      </div>
    
      <div class = "modal-body">

        <form action="" method="POST">
                <!-- <label>Date</label> -->
                <!-- why isn't echo working? -->

                <label>Meal Option</label>
                <select name="meal">
                    <option value =""> --Select--</option>
                    <option value ="Hamburger"> Hamburger</option>
                    <option value ="Pizza"> Pizza </option>
                    <option value ="Grilled Cheese Sandwich"> Grilled Cheese Sandwich </option>
                </select> <br><br><br>

                <label>Student ID</label> 
                <input type = "number" name = "idnum" placeholder = "Enter Your Student ID"/><br>

                <!-- <span class = "date"></span> -->

        </form>

    </div>

    <input type = "submit" class = "subButton" name = "insert" value = "SUBMIT"/>

    </div>
  </div>



  

  <script src="script.js"></script>

</body>

</html>
<!-- PHP CODE FOR FORM ABOVE BELOW  -->
<?php

$connection = mysqli_connect("localhost", "root", ""); 
// , "calendardb", 80);
$db = mysqli_select_db($connection, 'calendardb');
if(isset($_POST['insert']))
{
    $meal = $_POST['meal'];
    $idnum = $_POST['idnum'];

    //Embedded SQL
    $query = "INSERT INTO `testTable`(`meal`, `idnum`) VALUES ('$meal', '$idnum')"; 
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type = "text/javascript"> alert("Your order has been recorded.") </script>';
    }
    else
    {
        echo '<script type = "text/javascript"> alert("Your order has not been recorded!") </script>';
    }

}

?>