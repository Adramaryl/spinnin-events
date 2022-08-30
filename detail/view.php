<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Event detail";
        $site_description = "More info on this event";
        require "head.php"; 
    ?>
    <body>
        <?php require "header.php"; ?>
        <main>
            <?php foreach($details_list as $detail): ?>

            <div class="title">
                <h1><?= $detail["title"] ?></h1>
            </div>

            <div class="detail">
                <img src="<?= $detail["image"] ?>" alt="">
                <video width="320" height="240" controls>
                    <source src="<?= $detail["video_link"] ?>">
                </video>
                <time><?= date_format($detail["date"], "d/m/Y")?></time>
                <p><?= $detail["info"] ?></p>
                <a href="<?= $detail["tickets_link"] ?>">Buy tickets</a>
            </div>

            <?php endforeach; ?>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>