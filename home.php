<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>MuscleGym</title>
</head>
<body>
    <nav >
        <div class="nav-logo">
            <img src="img-logo.png" alt="">
        </div>
        <ul class="nav-link">
            <li id="link4" class="link"><a href="#">Program</a></li>
            <li id="link1" class="link"><a href="#">Schedule</a></li>
            <li id="link2" class="link"><a href="#">Membership</a></li>
            <li id="link3" class="link"><a href="#">Suplemen</a></li>
        </ul>
        <a class="acc" style="color: #fff;" href="user.php"><i class="ri-account-circle-line"></i> <?php echo $_SESSION['name']; ?></a>
    </nav>

    <header class="container">
        <div class="content">

            <img class="image-logo" src="image.jpg" alt="">
            <h1>WELCOME <span><?php echo $_SESSION['name'];?></span></h1>
            <h3>You Want Have Your BodyGoals</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptate asperiore
            </p>
            <h4>
                <a href="logout.php">LOGOUT</a>
        </h4>
        </div>    

    </header>

    <div class="workout">
        <h2>WORKOUT</h2>
        <H3 class="sub-header">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas suscipit inventore atque dolorum dignissimos adipisci nostrum, accusantium, quo voluptas</H3>
        <div class="work-feature">
            <div id="card1" class="card card1">
                <h3>CHEST DAY</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate iusto sunt iure dolore velit nihil 
                </p>
                <a href="#">Check This</a>
            </div>
            <div id="card2" class="card card2">
                <h3>BACK DAY</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas earum rerum sint quibusdam laborum nam suscipit, vero, 
                </p>
                <a href="#">Check This</a>
            </div>
            <div id="card3" class="card card3">
                <h3>LEGS DAY</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel recusandae quos maxime quasi iste blanditiis temporibus 
                </p>
                <a href="#">Check This</a>
            </div>
            <div id="card4" class="card card4">
            <h3>ARMS DAY</h3> 
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus odit repellendus suscipit temporibus magnam optio molestias 
                </p>
                <a href="#">Check This</a>
        </div>
    </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
}else{
    header("Location: sign-in.php");
    exit();
}
    ?>