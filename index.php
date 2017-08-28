<?php require_once("includes/connection.php"); ?>
<?php
    session_start();

    if(isset($_SESSION["session_username"])){
    // echo "Session is set"; // for testing purposes
    header("Location: chat.php");
    }
    
    if(isset($_POST["login"])){
    
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query = mysqli_query($con, "SELECT * FROM userinfo WHERE username='".$username."' AND password='".$password."'");
    
        $numrows=mysqli_num_rows($query);
        if($numrows != 0)
    
        {
        while($row = mysqli_fetch_assoc($query))
        {
        $dbusername = $row['username'];
        $dbpassword = $row['password'];
        }
    
        if($username == $dbusername && $password == $dbpassword)
    
        {
    
    
        $_SESSION['session_username'] = $username;
    
        /* Redirect browser */
        header("Location: chat.php");
        }
        } else {
    
     $message =  "Invalid username or password!";
        }
    
    } else {
        $message = "All fields are required!";
    }
    }
    ?>
<?php include("includes/header.php"); ?>
<div class="container mlogin">
    <div id="login"><br><br><br><br><br><br>
        <h1>SIGN IN</h1><br>
        <form name="loginform" id="loginform" action="" method="POST">
            <p>
                <input type="text" name="username" id="username" class="input" placeholder="Username" size="20" /></label>
            </p>
            <p>
                <input type="password" name="password" id="password" class="input" placeholder="Password" size="20" /></label>
            </p>
            <p class="submit">
                <input id="sumbit" name="login"  class = "sumbit" type="submit" value = "Sign In"/></p>
            </p>
            <p class="regtext">No account yet? <a href="register.php" >Register Here</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>