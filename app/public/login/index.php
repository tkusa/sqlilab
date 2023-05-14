<html>
    <head>
    </head>
    <body>
        <div>
            <h1>Login</h1>
            <div>
                <form method="POST" action="/login/login.php">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" />
                    </div>
                    <div>
                        <label for="username">Password</label>
                        <input type="password" name="password" />
                    </div>
                    <input type="submit" value="Submit"/>
                    <p><?php if (isset($_GET["f"])) { echo "Failed to Login"; } ?>
                </form>
            </div>
        </div>
    </body>
</html>
