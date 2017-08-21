<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="icon" type="text/css" href="img/favicon.png">
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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