<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>About Us</title>

    <style>

        body{
            display: flex;
            flex-direction: column;
        }

        .head-img {
            position: relative;
            text-align: center;
            color: ivory;
            
            width: 101.2%;
            max-height: 525px;
            object-fit: cover;
            margin: 0;
            overflow: hidden;
            object-position: 10% 50%;

        }

        .headtext{

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            width: 40%;
            padding: 10px;
            border-radius: 20px;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            background: rgba(0,0,0,0.5);


        }
            
        .container{

            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .content{

            display: flex;
            flex-direction: column;
            flex-grow: 1;
            width: 80%;
            background: #1c1c1c;

        }

        .s1{

            display: flex;
            flex-direction: row;
        }

        .text{

            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            font-size: 20px;
            margin-left: 50px;
            color: white;
            margin-right: 50px;
        }

        .team {

            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 80%;
            

        }
        .team img{


            width: 250px;
            height: 300px;
            object-fit: cover;
            border: 2px solid lightgreen;
            border-radius: 30px;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 30px;


        }

        .info{

            text-align: center;
            width: 80%;
            margin-left: 11%;
            color: ivory;

        }
       



    </style>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    
    <div class="head-img">

        <img src="assets/lucas-calloch-P-yzuyWFEIk-unsplash.jpg" alt="">

        <div class="headtext">

            <h1>About Us</h1>

        </div>

    </div>

    <br><br><br>

    <div class="container">
        <div class="content">

            <h1>Our Solution</h1>

            <br>

            <div class="s1">
                <img src="assets/solution.png" alt="" style="width: 40%; height: auto;">
            
                <div class="text">
    
                    <p>
                       We created a software for schools to use. It basically allows for students to place orders 
                       and then pick up their food at the school cafeteria. This would allow for students to simply go 
                       through the lunch line quickly.

                       <br><br>

                       Food waste will be avoided since the administrators know how much food is needed for the day. 
                       The administrators can see what the students have ordered. 
                       This would allow them to have a better estimate. 

                       <br><br>

                       Better food estimates would lead less money being spent on food. This would allow administrators to 
                       improve the quality of the food they serve since they have some extra money.

                    </p>
    
                </div>
            </div>

        </div>
        
        <br><br><br>

        <h1 style="background: linear-gradient(to right, #00e029 , #00b3e0);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        background-clip: text;">
        
        Meet the Team
    
        </h1>

        <div class="team">
            <div class="bio">
                <img src="assets/Chakshan.png" alt="">
                <div class="info">
                    <h2 style="color: mediumturquoise;">Chakshan Kothakota</h2>
                    <h3 style="color: rgb(30, 241, 111);">Database Specialist</h3>
                    <p>
                        Hello, my name is Chakshan. I was responsible for the creation of our website’s 
                        sign up and log in system for students to create accounts and order lunch.
                    </p>
                </div>
            </div>

            <div class="bio">
                <img src="assets/Adrish.jpeg" alt="">
                <div class="info">
                    <h2 style="color: mediumturquoise;">Adrish Kar</h2>
                    <h3 style="color: rgb(30, 241, 111);">Web Master</h3>
                    <p>
                        Hi, my name is Adrish. I oversaw the project and helped in managing the database,
                        creating and styling the calendar and admin pages, and ensuring proper functionality of our website.
                    </p>
                </div>
            </div>
            
            <div class="bio">
                <img src="assets/Atharv.png" alt="">
                <div class="info">
                    <h2 style="color: mediumturquoise;">Atharv Gupta</h2>
                    <h3 style="color: rgb(30, 241, 111);">Content Specialist</h3>
                    <p>
                        Heyo, my name is Atharv and I was responsibel for giving the website it's looks 
                        and made sure that everything was working as smoothly as possible.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <br><br><br><br>
     
</body>
</html>
