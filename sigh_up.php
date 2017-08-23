<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="Ssign"><br><br><br><br><br><br>
    <div id="container_demo" >
    <a class="hiddenanchor" id="tosubscribe"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="subscribe" class="animate form">
            <form  action="error.php" method="POST">
                <h1> Sign up </h1>
                <p>
                    <input id="username" name="username" required="required" type="text" placeholder="Your username" />
                </p>
                <p>
                    <input id="password1" name="password1" required="required" type="password" placeholder="Your password"/>
                </p>
                <p>
                    <input id="password2" name="password2" required="required" type="password" placeholder="Confirm password"/>
                </p>               
                <p class="signin button">
                    <button name="submit" btn-lg">Sign up</button>
                </p>
                <p class="change_link">
                    Already a member ?
                    <a href="sign_in.php" class="to_subscribe"> Go and log in </a>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>