<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup.css">
    <title>SIGN UP</title>
</head>

<body style="height : 1000px;">


    <div class="FORM" style=" height : 530px;">

        <div class="FORM-text">
            <header><a href="../home/home.php">Game Card</a></header>
            <h3>Sign Up</h3>
            <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="invalidusername&email"){
                            echo '<p class="msg-erreur">Pseudo et email invalides!</p>';
                        }else if($_GET["error"]=="invalidusername"){
                            echo '<p class="msg-erreur">Pseudo invalide!</p>';
                        }else if($_GET["error"]=="invalidemail"){
                            echo '<p class="msg-erreur">Email invalide!</p>';
                        }else if($_GET["error"]=="PWDdontmatch"){
                            echo '<p class="msg-erreur">Les mots de passe ne correspondent pas!</p>';
                        }else if($_GET["error"]=="USERNAMETAKEN"){
                            echo '<p class="msg-erreur">Pseudo déja utilisé!</p>';
                        }
                    }
                    
                    
                    
                    
                    ?>



            <form action="../extern/signup.ext.php" method="post" style="margin-top : 1px">
                
                <label>name</label> <br>
                <input type="text" name="prenom" placeholder="Entrez votre prenom" required autocomplete="off"> <br>

                <label>username</label> <br>
                <input type="text" id="in" name="username" placeholder="Tapez un nom d'utilisateur" required autocomplete="off">
                <br>
                <label>email</label> <br>
                <input type="email" name="email" placeholder="Entrez votre email" required autocomplete="off"> <br>

                <label>password</label> <br>
                <input type="password" name="password" placeholder="Votre mot de passe" required autocomplete="off"> <br>

                <label>confirm your password </label> <br>
                <input type="password" name="password2" placeholder="Retaper votre mot de passe" required autocomplete="off"> <br>



                <input type="checkbox" name="accepter" value="OK" checked required autocomplete="off"><span id="accept">J’accepte les
                    conditions d'utilisation</span>


                <button type="submit" name="signup-submit">Sign Up</button>


            </form>
            <p>ALREADY HAVE AN ACCOUNT ?<a href="login.php"> LOG IN</a></p>

        </div>

    </div>
    
</body>

</html>
