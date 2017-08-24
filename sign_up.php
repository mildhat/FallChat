<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="icon" type="text/css" href="img/favicon.png">

	<link rel="stylesheet" href="style.css">

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div class="Ssign">
    <div id="container_demo" >
    <a class="hiddenanchor" id="tosubscribe"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="subscribe" class="animate form">
            <form action="registered.html" method="POST">
            <div class="enter">
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
                    <input id="sumbit" class = "sumbit" type="submit" value = "Sing up"/></p>
                      <p class="change_link">
                <p class="change_link">
                    Already a member ?
                    <a href="index.html" class="to_subscribe"> Go and log in </a>
                </p>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>
