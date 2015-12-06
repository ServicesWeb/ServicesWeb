<?php
    include 'header.php';
    require 'connection.php';
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

    function isValidEmail(){
        if(empty($_POST["email"])){
            return 1;
        }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            return 2;
        }
        else{
            return 0;
        }
    }
?>

<div id="signupMainView">
    <form id="singup" enctype = "multipart/form-data" method = "post">
       <div>
         Username
         <br>
         <input id="sign_user_box" type="text" name="username" />
         <br>
         <?php
            if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                if(isValidUsername()==1){
                    echo "Username is required";
                }
                else if(isValidUsername()==2){
                    echo "Please input a valid username";
                }
            }
        ?>


         Password
         <br>
         <input id="signup_box_password" type="password" name="password" />
         <?php
            if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                if(isValidPassword()==1){
                    echo "Password is required";
                }
                else if(isValidPassword()==2){
                    echo "Please input a valid password";
                }
            }
        ?>
         <br>
         <br>
         <br>
         <div>Email</div>
         <input id="signup_box_email" type="text" name="email" />

         <?php
            if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                if(isValidEmail()==1){
                    echo "Email is required";
                }
                else if(isValidEmail()==2){
                    echo "Please input a valid email";
                }
            }
        ?>


         <input id= "singup_submit" type="submit" value="submit"/>

         <?php
            if((isValidUsername()==0)&&(isValidPassword()==0)&&(isValidEmail()==0)){
                $username=$_POST["username"];
                $password=$_POST["password"];
                $email=$_POST["email"];

                $sql0 = "SELECT username FROM user where username = '".$username."'";
                $result0 = $mysqli->query($sql0);
                if(mysqli_num_rows($result0) > 0){
                    echo "Signup failed. This username has been registered.";
                }

                $sql1 = "SELECT email FROM user where email = '".$email."'";
                $result1 = $mysqli->query($sql1);
                if(mysqli_num_rows($result1) > 0){
                    echo "Signup failed. This email has been registered.";
                }

                if((mysqli_num_rows($result0) == 0) && (mysqli_num_rows($result1) == 0)){
                    $sql2 = "INSERT INTO user VALUES('".$username."','".$password."', '".$email."')";
                    $result2 = $mysqli->query($sql2);
                    if(!$result2){
                        echo $mysqli->error;
                    }
                    else{
                        echo "Signup succeeded";
                    }
                }
            }
         ?>

       </div>
    </form>
</div>

<?php
    require 'foot.php';
?>
