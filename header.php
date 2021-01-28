<html>
<head>
        <title>loginpage</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <?php wp_head();?>
</head>
<body>

        <div id="container">
                <ul>
                        <li>Help</li>
                        <li>About testing
                        <ul>
                                <li>About website</li>
                                <li>About Future plans</li>
                                <li>Latest Offers</li>
                                <li>Achievements
                                        <ul>
                                                <li>Awards</li>
                                                <li>certification</li>
                                        </ul></li>
                        </ul></li>
                        <li>Contacts
            <ul>
            <li>Call us</li>
            <li>Whatsup us</li>
            <li>Live Chat</li>
            </ul>
                        </li>
                        <li>Home</li>
                </ul>
        </div>
        <div class="loginbox">
                <img src="loginicon.jpg" class="icon">
                <h1>LOGIN HERE</h1>
                <form action="login.php" method="post">
                        <p>Username:</p>
                        <input type="text" name="uname" placeholder="Enter your name">
                        <p>Password:</p>
                        <input type="Password" name="password" placeholder="Enter password">
                        <input type="submit" name="submit" value="Login"<br>
                        <a href="">Forget Password?</a><br>
                        <a href="">Sign up / Register now</a>
                </form>
        </div>
</body>
</html>

