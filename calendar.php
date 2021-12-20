<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/caladmin.css" />
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
    <style> 
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap%27');
    </style>

    <title>Your Calendar</title>
  </head>

  <body>
    <?php
        include_once 'header.php';
    ?>

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
        <div class="days"></div>
      </div>
    </div>

    <div id="myModal" class="modal">

      <div class="modal-content">
        <div class="modal-header">
          <h2>Place Your Order</h2>
          <span class="close cursor" onclick="closeModal()">&times;</span>
        </div>

        <div class="modal-body">
          <form action="calendarSubmit.php" method="POST">

            <label>Date</label> <br />

            <input
              type="text"
              id="date"
              name="dateSelected"
              value=""
            /><br /><br /><br />

            <label>Meal Option</label><br />
            <select name="meal">
              <option value="">--Select--</option>
              <option value="Hamburger">Hamburger</option>
              <option value="Pizza">Pizza</option>
              <option value="Grilled Cheese Sandwich">
                Grilled Cheese Sandwich
              </option>
              <option value="Caesar">Caesar Salad</option>
              <option value="Pasta">Pasta</option>
              <option value="Burrito">Burrito</option>
              <option value="Butter Chicken and Naan">Butter Chicken and Naan</option>
              <option value="Samosa">Samosa</option>
              <option value="Lasagna">Lasagna</option>
            </select>
            <br /><br /><br />

            <input
              type="submit"
              class="subButton"
              name="insert"
              value="SUBMIT"
            />
          </form>
        </div>
      </div>
    </div>
      
    

    <script src="js/script.js"></script>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
          echo "<script type = \"text/javascript\"> alert(\"Your order has been recorded!\") </script>";
        } 
        else if ($_GET["error"] == "somethingwentwrong") {
          echo "<script type = \"text/javascript\"> alert(\"Something went wrong. Please try again.\") </script>";
        } 
      }
    ?> 
  </body>
</html>

