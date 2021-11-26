<?php session_start()?>
<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.msg.css">

</head>

<body style="background-image: linear-gradient(red, yellow); margin-top : 0px; height : 700px">

<br/>
<br/>
    <p style="margin-top : 0px">WELCOME <br> <?php echo $_SESSION["username"]; ?></p>


    <div class="btn">
        <button type="button"><a href="../jeu-principal/jeu-principal.php"><span>START</span></a></button>

    </div>
    <div class="gif">
        <img src="../img-site/original%20(1).gif">

    </div>
    <div class="logo">

        <a href="../home/home.php">Game Card</a>

    </div>
    <div class="home-redirection"><a href="../home/home.php">HOME</a></div>



</body>


</html>
