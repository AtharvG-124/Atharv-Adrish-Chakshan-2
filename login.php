<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/forms.css" />
    <title>Log in</title>
    
    <style>
      p {
        color: white;
      }
    </style>

    <script type="text/javascript">
      var counter = 0;
      function changeImg() {
          counter++;
          var image = document.getElementById('myImg');
          if (counter % 3 == 0) {
              image.src = "assets/pexels-daria-shevtsova-704569.jpg";
          }
          else if (counter % 3 == 1){
              image.src = "assets/pexels-trang-doan-1092730.jpg";
          } else {
              image.src = "assets/pexels-steve-3789885.jpg"
          }
      }
    </script>

  </head>
  <body>
    <?php
        include_once 'header.php';
    ?>

    <div class="signin">
      <div class="main">
        <h1>Sign in to continue</h1>
        <hr>
        <br />
        <form action="includes/login.inc.php" method="post">  
          <div class="centersub">
            <div class="input">
              <label class="custom-field one">
                <input class="form-input" type="text" placeholder=" " name="uid"/>
                <span class="placeholder">Username</span>
              </label>
            </div>

            <br />

            <div class="input">
              <label class="custom-field one">
                <input class="form-input" type="password" placeholder=" " name="pwd"/>
                <span class="placeholder">Password</span>
              </label>
            </div>

            <br />
          </div>

          <div>
            <button class="submit-button" type="submit" name="submit">Sign In</button>
          </div>
        </form>

        <p>Don't have an account? <a href="signup.php">Create one</a></p>
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p style='color:red'>*Fill in all fields!</p>";
            } 
            else if ($_GET["error"] == "wronglogin") {
              echo "<p style='color:red'>*Incorrect login information!</p>";
            } 
          }
        ?>              
      </div>
      <div class="feature_img">
        <img
          id="myImg"
          src="assets/pexels-daria-shevtsova-704569.jpg"
          alt="Have a good lunch!"
          style="
            height: 30rem;
          "
          onclick="changeImg()"
        />
      </div>
    </div>
  </body>
</html>
