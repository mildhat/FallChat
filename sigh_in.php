<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
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