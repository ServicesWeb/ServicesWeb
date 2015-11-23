<?php
    include 'header.php';
?>

<?php

    function isValidUsername(){
        if(empty($_POST["username"])){
            return 1;
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["username"])){
            return 2;
        }
        else{
            return 0;
        }
    }

    function isValidPassword(){
        if(empty($_POST["password"])){
            return 1;
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["password"])){
            return 2;
        }
        else{
            return 0;
        }
    }
?>

<div id="loginMainView">
    <form id="login" enctype = "multipart/form-data" method = "post">
       <div>
         Username:
         <input type="text" name="username" />
         <?php 
            if(!(empty($_POST["username"])&&empty($_POST["password"]))) {
                if(isValidUsername()==1){
                    echo "Username is required";
                }
                else if(isValidUsername()==2){
                    echo "Please input a valid username";
                }
            } 
         ?>
         <br />

         Password:
         <input type="password" name="password" />
         <?php 
            if(!(empty($_POST["username"])&&empty($_POST["password"]))) {
                if(isValidPassword()==1){
                    echo "Password is required";
                }
                else if(isValidPassword()==2){
                    echo "Please input a valid password";
                }
            } 
         ?>
         <br />
         <input type="submit" />

         <p>Don't have an account? <a href="signup.php">Sign up!</a></p>
       </div>
    </form>
</div>

<?php
    require 'foot.php';
?>
