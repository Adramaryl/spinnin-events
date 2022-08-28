<!DOCTYPE html>
<html>
    <?php 
        $title="Log In";
        $site_description="Login";
        require "../head.php";
    ?>
    <body>
        <?php require "../header.php"; ?>
        <main>
            <div class="title">
                <h1>Log In</h1>
            </div>
            <div class="elform">
                <form action="" method="POST">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <?php if($hasError): ?>
                        <p>Connexion error, please try again</p>
                    <?php endif; ?>
                    <div>
                        <input type="submit" value="Log In">
                    </div>
                </form>
            </div>
        </main>
        <?php require "../footer.php"; ?>
    </body>
</html>