<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>

</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="slideshow-container" id="owl-demo">

        <div class="mySlides fade">
            <img class="imgt1" src="assets/dan-gold-4_jhDO54BYg-unsplash.jpg">
            <div class="head-text"> 
                <div class="center">
                    "Food is symbolic of love when words are inadequate."
                    <br><br>
                    - Alan D. Wolfelt

                </div>
            </div>
        </div>
      
        <div class="mySlides fade">
            <img class="imgt1" src="assets/chad-montano-eeqbbemH9-c-unsplash.jpg">
            <div class="head-text">
                <div class="center">
                    "One cannot think well, love well, sleep well, if one has not dined well."
                    <br><br>
                    - Virgina Woolfe

                </div>
            </div>
        </div>
      
        <div class="mySlides fade" >
            <img class="imgt1" src="assets/jingxi-lau-WfcBiBvcZ04-unsplash.jpg">
            <div class="head-text">
                <div class="center">
                    "Food is not rational. Food is culture, habit, craving, and identity."
                    <br><br>
                    - Jonathan Sofran Foer
                </div>
            </div>

        </div>

        <div class="mySlides fade">
            <img class="imgt1" src="assets/brooke-lark-4J059aGa5s4-unsplash.jpg">
            <div class="head-text">
                <div class="center">
                    "Food may be essential as fuel for the body, but good food is fuel for the soul"
                    <br><br>
                    - Malcom Forbes
                </div>
            </div>

            
        </div>

        <div class="mySlides fade">
            <img class="imgt1" src="assets/davide-cantelli-jpkfc5_d-DI-unsplash.jpg">
            <div class="head-text">
                <div class="center">
                    "The food you eat can be either the safest and most powerful medicine or the slowest form of poison."
                    <br><br>
                    - Ann Wigmore
                </div>

            </div>

        </div>
      
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="bounce"> 
            <img src="assets/arrow.png" alt="" style="height: auto; width: 40%;">
        </div>

        
    </div>


    <div class="content-container">
        <div class="purpose">
            <h1>Living a healthy life is very important and it can prevent long-term illnesses.</h1>
    
        </div>

        <br><br><br>
        
        <div class="content">

            <img src="assets/HealthDiet.png" alt="" class="imgs2">


            <h1>
                Creating a controlled diet is very important in order to have a healthy life 
                and it all begins at creating a healthy diet in school.
            </h1>

        </div>

        <div class="problem-address">

            <h1>
                School lunches often look horrible and most of it goes to waste. About 562,442 tons
                of waste each year in California alone! However, food waste is not the only problem . . .
            </h1>

            <a href="Problem.php"><button class="button">The Rest of The Problem</button></a>
            

        </div>

        <div class="divider">
            <img src="assets/divider.png" alt="">
        </div>



        <div class="works">

            <div class="title">
                <h1>How it Works</h1>
            </div>
            

            <div class="left">


                <img src="assets/adimg1.png" alt="">

                <div class="text one">

                    <h1>Sign Up</h1>
                    <p> 
                        Sign Up either as a student or an administrator. A student will be able 
                        to place and order and be able to pick it up in the school cafeteria. The administrator
                        will be able see what the student order and have a menu.
                    </p>
                </div>
                    

            </div>

            <br>

            <div class="right">

                <div class="text two">

                    <h1>Order Food</h1>
                    <p>
                        Once signed in, students can order food for each day. Simply choose the date and order 
                        from one of the items in the menu. The menu will be set up by an administrator.
                    </p>
                </div>

                <img src="assets/adimg3.png" alt="">
                
                
            </div>

            <br><br>

            <div class="left">

                <img src="assets/adimg2.png" alt="">

                <div class="text three">

                    <h1>Stay Healthy</h1>
                    <p>
                        Make sure that you get all the nutriton that your body needs. It is very important 
                        that your body gets nutrients, espicially when you are growing.
                        Enjoy the food and have a healthy diet!
                    </p>

                </div>
            </div>

        </div>

      
        <div class="signup">
            <h1>Ready to Get Started?</h1>
            <a href="signup.php"><button class="button2">Sign Up Now!</button></a>
        </div>
        <br><br><br><br>
    </div>

    
    <script src="js/carousel.js"></script>
</body>
</html>