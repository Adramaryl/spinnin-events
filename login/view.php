<!DOCTYPE html>
<html>
    <?php $title="Log In"; $site_description="Login"; require "../head.php"; ?>
    <body>
        <?php require "../header.php"; ?>
        <main>
            <div class="title">
                <h1>Log In</h1>
            </div>
            <div>
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
                        <p>Problème de connexion. Veuillez réessayer.</p>
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