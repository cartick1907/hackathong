<!DOCTYPE>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="assets.css">
    <title> Society Login</title>
    <meta charset="utf-8">
<? session_start() ?>
</head>
<body>
    <div class = "sidebar">
        <div class = "header">
        SideBar
        </div>
    </div>
    <div class = "main">
    <div class = "header">
        <span class = "logo"><b> LOGO </b></span>
        <span class = "heading">
            Heading
        </span>
    </div>
    <div class = "content">
        <div class = "tile">
            <fieldset>
                <legend>Society Login</legend>
                <form method="post" name="society_login" action = "\includes\society_login.php">
                    <span>Username</span>&nbsp;
                    <input type = "text" name = "username" placeholder="society123" maxlength="60"><br><br>
                    <span>Password </span>&nbsp;
                    <input type = "password" name = "password" maxlength="60">
                    <br><br>
                    <input type = "submit" name = "log_btn" value = "LOGIN">
                </form>
            </fieldset>
        </div>
        <div class = "tile">
            <fieldset>
                <legend>Society Sign Up</legend>
                <form method="post" name="society_signup" action = "\includes\society_signup.php">
                    <span>Society Name</span>&nbsp;
                    <input type = "text" name = "soc_name" placeholder="Society" maxlength="60"><br><br>
                    <span>Username </span>&nbsp;
                    <input type = "text" name = "soc_username" maxlength="60">
                    <br><br>
                    <span> </span>&nbsp;
                    <input type = "text" name = "soc_username" maxlength="60">
                    <br><br>
                    <input type = "submit" name = "log_btn" value = "LOGIN">
                </form>
            </fieldset>
        </div>
    </div>
    <div class = "footer">
        <p>Made with <3 by word.exe</p>
    </div>
</div>
</body>
</html>
