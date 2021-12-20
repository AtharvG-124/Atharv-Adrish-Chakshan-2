<?php
    session_start();
?>

<div class="nav_bar">

    <nav>
        <a href="index.php"><button class="logo">Luncheon</button></a>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a href='includes/logout.inc.php' target='_parent'><button class='nav-button'>Log Out</button></a>";
                echo "<a href='profile.php' target='_parent'><button class='nav-button'>Profile</button></a>";
                echo "<a href='calendar.php' target='_parent'><button class='nav-button'>Calendar</button></a>";
            }
            else {
                echo "<a href='signup.php' target='_parent'><button class='nav-button'>Sign Up</button></a>";
                echo "<a href='login.php' target='_parent'><button class='nav-button'>Log In</button></a>";
            }
        ?>
        
        <a href='about.php' target='_parent'><button class='nav-button'>About</button></a>
        <a href='problem.php' target='_parent'><button class='nav-button'>Problem</button></a>


    </nav>

</div>