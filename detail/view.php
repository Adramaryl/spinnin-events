<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Event detail";
        $site_description = "More info on this event";
        require "../head.php"; 
    ?>
    <body>
        <?php require "../header.php"; ?>
        <main>
            <?php foreach($details_list as $detail): ?>

            <div class="title">
                <h1><?= $detail["title"] ?></h1>
            </div>

            <div class="detail">
                <div>
                    <img src="../<?= $detail["image"] ?>" alt="">
                </div>

                <div>
                    <iframe width="500" height="300" src="<?= $detail["video_link"] ?>?controls">
                    </iframe>
                </div>

                <div>
                    <time><?= date_format($detail["date"], "d/m/Y")?></time>
                </div>

                <div>
                    <p><?= $detail["info"] ?></p>
                </div>

                <div>
                    <button><a href="<?= $detail["tickets_link"] ?>">Buy tickets</a></button>
                </div>
            </div>

            <?php endforeach; ?>
        </main>
        <?php require "../footer.php"; ?>
    </body>
</html>