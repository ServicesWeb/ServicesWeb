<?php
    require 'connection.php';

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

// obtain variable "show" from either "GET" or "POST", if 1, show login and hide signup, otherwise the opposite
$show_get=0;
$show_post=0;
$show_get=$_GET["show"];
$show_post=$_POST["showp"];

// from login.php
$login_str = "";
   if((isValidUsername()==0)&&(isValidPassword()==0)&&(isValidEmail()==1)){  //&&($show_get==1 || $show_post==1)
	   $username=$_POST["username"];
	   $password=$_POST["password"];
	   $sql = "SELECT username, password FROM user where username = '".$username."'";
	   $result = $mysqli->query($sql);
	   if(mysqli_num_rows($result) == 0){
		   $login_str = "Login failed. This username doesn't exist.";
	   }
	   else{
		   list($username_db,$password_db) = $result->fetch_row();
		   if($password_db == $password){
			   $login_str = "Login succeeded";
			   /* set session cookie */
			   setcookie("userlogin", $username);
			   header("Location: index.php");
		   }
		   else{
			   $login_str = "Login failed. Password doesn't match.";
		   }
	   }
   }


// from signup.php
$signin_str = "";
    if((isValidUsername()==0)&&(isValidPassword()==0)&&(isValidEmail()==0)){  //&&($show_get!=1 && $show_post!=1)
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];

        $sql0 = "SELECT username FROM user where username = '".$username."'";
        $result0 = $mysqli->query($sql0);
        if(mysqli_num_rows($result0) > 0){
            $signin_str = "Signup failed. This username has been registered.";
        }

        $sql1 = "SELECT email FROM user where email = '".$email."'";
        $result1 = $mysqli->query($sql1);
        if(mysqli_num_rows($result1) > 0){
            $signin_str = "Signup failed. This email has been registered.";
        }

        if((mysqli_num_rows($result0) == 0) && (mysqli_num_rows($result1) == 0)){
            $sql2 = "INSERT INTO user VALUES('".$username."','".$password."', '".$email."')";
            $result2 = $mysqli->query($sql2);
            if(!$result2){
                $signin_str = $mysqli->error;
            } else {
                $signin_str = "Signup succeeded";
            }
        }
    }
?>

<?php
   include 'header.php';            // must be placed after "setCookie" part, otherwise the link to index.php and setCookie won't work
?>

<main class="main" id="main">
  <div class="container" id="sign-in">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-login">

                  <div class="panel-heading">
                      <div class="row">
                        <?php
                           if ($show_get==1 || $show_post==1) {    // decide to show register or login layout
                        ?>
                              <div class="col-xs-6">
                                <a href="signIn.php?show=1" class="active" id="login-form-link">Login</a>
                              </div>
                              <div class="col-xs-6">
                                  <a href="signIn.php?show=2" id="register-form-link">Register</a>
                              </div>
                        <?php
                           }
                           else {
                          ?>
                              <div class="col-xs-6">
                               <a href="signIn.php?show=1" id="login-form-link">Login</a>
                              </div>
                              <div class="col-xs-6">
                               <a href="signIn.php?show=2" class="active2" id="register-form-link">Register</a>
                              </div>
                          <?php
                           }
                         ?>
                      </div>
                      <hr>
                  </div>

                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12">
                            <?php
                               if ($show_get==1 || $show_post==1) {    // decide to show login layout or not, by display as block or none
                            ?>
                                  <form id="login-form" action="#" method="post" enctype = "multipart/form-data" role="form" style="display: block;">
                                    <input type="hidden" name="showp" value="1">
                            <?php
                               }
                               else {
                            ?>
                                  <form id="login-form" action="#" method="post" enctype = "multipart/form-data" role="form" style="display: none;">
                            <?php
                               }
                            ?>
                                  <div class="form-group">
                                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                      <?php
                                          if(!(empty($_POST["username"])&&empty($_POST["password"]))) {
                                              if(isValidUsername()==1){
                                                  echo "Username is required";
                                              } else if(isValidUsername()==2){
                                                  echo "Please input a valid username";
                                              }
                                          }
                                      ?>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                      <?php
                                          if(!(empty($_POST["username"])&&empty($_POST["password"]))) {
                                              if(isValidPassword()==1){
                                                  echo "Password is required";
                                              } else if(isValidPassword()==2){
                                                  echo "Please input a valid password";
                                              }
                                          }
                                      ?>
                                  </div>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-sm-6 col-sm-offset-3">
                                              <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                              <p><?php echo $login_str; ?></p>
                                          </div>
                                      </div>
                                  </div>
                              </form>

                              <?php
                                 if ($show_get==1 || $show_post==1) {            // decide to show register layout or not, by display as block or none
                              ?>
                                    <form id="register-form" action="#" method="post" enctype = "multipart/form-data" role="form" style="display: none;">
                              <?php
                                 }
                                 else {
                              ?>
                                    <form id="register-form" action="#" method="post" enctype = "multipart/form-data" role="form" style="display: block;">
                                      <input type="hidden" name="showp" value="2">
                              <?php
                                 }
                              ?>
                                  <div class="form-group">
                                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                      <br>
                                      <?php
                                          if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                                              if(isValidUsername()==1){
                                                  echo "Username is required";
                                              } else if(isValidUsername()==2){
                                                  echo "Please input a valid username";
                                              }
                                           }
                                       ?>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                      <?php
                                          if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                                              if(isValidEmail()==1){
                                                  echo "Email is required";
                                              } else if(isValidEmail()==2){
                                                  echo "Please input a valid email";
                                              }
                                          }
                                      ?>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                      <?php
                                          if(!(empty($_POST["username"])&&empty($_POST["password"])&&empty($_POST["email"]))) {
                                              if(isValidPassword()==1){
                                                  echo "Password is required";
                                              } else if(isValidPassword()==2){
                                                  echo "Please input a valid password";
                                              }
                                          }
                                      ?>
                                  </div>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-sm-6 col-sm-offset-3">
                                              <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                              <p><?php echo $signin_str; ?></p>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<?php
    include 'footer.php';
?>
