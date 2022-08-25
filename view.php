<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Spinnin' Events</title>

        <meta name="keywords" content="Music, Events, Records, Spinnin">

        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php"><img src="images/spinnin_logo.png">&nbsp;<span class="bold">Spinnin'</span> <span class="thin">Events</span></a>
                <a href="https://spinninrecords.com/"><span class="bold">Spinnin'</span> <span class="thin">Records</span></a>
                <a href="" class="login">Sign up | Log in</a>
            </nav>
        </header>
        <main>
            <div class="banner">

            </div>

            <div class="title">
                <h1>Upcoming events</h1>
            </div>

            <div class="events">
                <?php foreach($events_list as $event): ?>
                    <div>
                        <img src="<?= $event["image"] ?>" alt="">
                        <h2><?= $event["title"] ?></h2>
                        <time><?= date_format($event["date"], "d/m/Y")?></time>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
        <footer>
            <div>
                <p>&copy; 2022 Spinnin' Records</p>
            </div>
        </footer>
    </body>
</html>