<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Upcoming Events";
        $site_description = "Our upcoming events";
        require "head.php"; 
    ?>
    <body>
        <header>
            <a href="index.php"><img src="images/spinnin_logo.png"></a>
            <nav>
                <a href="index.php"><span class="bold">Spinnin'</span> <span class="thin">Events</span></a>
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
                    <a href="">
                        <div class="elevent">
                            <img src="<?= $event["image"] ?>" alt="">
                            <h2><?= $event["title"] ?></h2>
                            <time><?= date_format($event["date"], "d/m/Y")?></time>
                        </div>
                    </a>
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