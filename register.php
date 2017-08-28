<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
    if(isset($_POST["register"])){
    
    
    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      
    
         
      $query = mysql_query("SELECT * FROM userinfo WHERE username = '".$username."'");
      $numrows = mysql_num_rows($query);
      
      if($numrows == 0)
      {
      $sql = "INSERT INTO userinfo
            (email, username,password) 
            VALUES('$email', '$username', '$password')";
    
      $result = mysql_query($sql);
    
    
      if($result){
       $message = "Account Successfully Created";
      } else {
       $message = "Failed to insert data information!";
      }
    
      } else {
       $message = "That username already exists! Please try another one!";
      }
    
    } else {
       $message = "All fields are required!";
    }
    }
    ?>
<?php if(!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<div class="container mregister">
    <div id="login"><br><br><br><br>
        <h1>REGISTER</h1>
        <form name="registerform" id="registerform" action="register.php" method="post">
            <p>
                <input type="email" name="email" id="email" class="input" placeholder="Email" /></label>
            </p>
            <p>
                <input type="text" name="username" id="username2" class="input" placeholder="Username" /></label>
            </p>
            <p>
                <input type="password" name="password" id="password2" class="input" placeholder="Password"/></label>
            </p>
            <p class="submit">
                <input id="sumbit" name="register" class = "sumbit" type="submit" value = "Register"/></p>
            </p>
            <p class="regtext">Already have an account? <a href="index.php" >Login Here</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>