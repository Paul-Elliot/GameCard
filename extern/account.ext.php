<?php
session_start();
if(isset($_POST["validate-submit"])){
    require 'dbh.ext.php';
    $id = $_SESSION["userId"];
    $name = $_POST["prenom"];
    $username = $_POST["username"];

    if(empty($name) && empty($username)) {
        header("Location: ../ACCOUNT/account.php?error=emptyfields");
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../ACCOUNT/account.php?error=invalidusername");
        exit();
    }else{
        if(empty($name)){
            $sql = " SELECT username FROM gamecard WHERE username ='".$username."';";
            $res = mysqli_query($conn,$sql);
            if(!$res){
                header("Location: ../ACCOUNT/account.php?error=sqlerror");
                    exit();
            }else { 
                $resultCheck = mysqli_num_rows($res); //on vérifie que le nom d'utilisateur n'est pas déjà utilisé
                if ($resultCheck >0){
                    header("Location: ../ACCOUNT/account.php?error=usernametaken");
                    exit();
                }else {
                    $sql = "UPDATE gamecard SET username='".$username."' WHERE id=".$id;
                    $res = mysqli_query($conn,$sql);
                    if(!$res){
                        header("Location: ../ACCOUNT/account.php?error=sqlerror");
                        exit();
                    }else{
                    header("Location: ../ACCOUNT/account.php?error=SUCCESS");
                    exit();
                         }
                      }
                  }
        }else if (empty($username)){
            
                
                    $sql = "UPDATE gamecard SET name='".$name."' WHERE id=".$id;
                    $res = mysqli_query($conn,$sql);
                    if(!$res){
                        header("Location: ../ACCOUNT/account.php?error=sqlerror");
                        exit();
                    }else{
                    header("Location: ../ACCOUNT/account.php?error=SUCCESS");
                    exit();
                         }
        }else {
                $sql = "UPDATE gamecard SET name='".$name."',username='".$username."' WHERE id=".$id;
                    $res = mysqli_query($conn,$sql);
                        if(!$res){
                            header("Location: ../ACCOUNT/account.php?error=sqlerror");
                        exit();
                        }else{
                            header("Location: ../ACCOUNT/account.php?error=SUCCESS");
                            exit();
                        }

        }
    }
mysqli_close($conn);
}else{
    header("Location: ../ACCOUNT/account.php?");
    exit();
}