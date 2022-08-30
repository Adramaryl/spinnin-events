<?php require_once "system/pages.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Upcoming Events";
        $site_description = "Our upcoming events";
        require "head.php"; 
    ?>
    <body>
        <?php require "header.php"; ?>
        <main>
            <div class="banner">
                <!-- Était censé y avoir le résultat d'une fonction qui aurait comparé la date des événements en DB avec la date courante pour afficher l'événement le plus proche -->
            </div>

            <div class="title">
                <h1>Upcoming events</h1>
            </div>

            <div class="events">
                <?php foreach($events_list as $event): ?>
                    <a href="detail/index.php?id=<?= $event["id"] ?>">
                        <div class="elevent">
                            <img src="<?= $event["image"] ?>" alt="">
                            <h2><?= $event["title"] ?></h2>
                            <time><?= date_format($event["date"], "d/m/Y")?></time>
                        </div>
                    </a>
                <?php endforeach; ?>
                <!-- Permet d'afficher l'image, le titre et la date de l'événement -->
            </div>

            <div class="pages">
                <?php if($page > 1): ?>
                    <button><a href="<?=getSelfUrl()?>?page=<?=$page-1?>">Previous</a></button>
                <?php endif; ?>
                <?php if(count($events_list) === ROW_PER_PAGE): ?>
                    <button><a href="<?=getSelfUrl()?>?page=<?=$page+1?>">Next</a></button>
                <?php endif; ?>
                <!-- Permet d'afficher la pagination -->
            </div>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>