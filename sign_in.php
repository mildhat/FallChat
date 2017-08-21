<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="icon" type="text/css" href="img/favicon.png">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleBS.css">
</head>
<body>
<div class="Ssign">
    <div id="container_demo"><br><br><br><br><br><br>
    <a class="hiddenanchor" id="tosubscribe"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
            <form  action="test.php" method="POST">
                <h1>Sign in</h1>
                <p>
                    <input id="username" name="username" required="required" type="text" placeholder="Your username"/>
                </p>
                <p>
                    <input id="password" name="password" required="required" type="password" placeholder="Your password" />
                </p>
                <p class="keeplogin">
                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                    <label for="loginkeeping">Keep me logged in</label>
                </p>
                <p class="login button">
                    <button  btn-lg">Sign in</button>
                </p>
                <p class="change_link">
                    Not a member yet ?
                    <a href="sign_up.php" class="to_subscribe">Join us</a>
                </p>
            </form>
        </div>
        </div>
        </div>
        </div>
</body>
</html>