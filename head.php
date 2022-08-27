<?php $appName = "Spinnin' Events"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$appName ?><?= isset($title) ? " - $title" : "" ?></title>
    <meta name="description" content="<?= $site_description ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $appName ?><?= isset($title) ? " - $title" : "" ?>">
    <meta property="og:site_name" content="<?= $appName ?>" />
    <?php if(isset($site_description)): ?>
        <meta property="og:description" content="<?= $site_description ?>">
    <?php endif; ?>
    <meta property="og:image" content="https://devenir.dj/wp-content/uploads/2015/08/spinnin_records_wallpaper__normal__by_angiegehtsteil-d8ic15b.png">

    <meta name="twitter:site" content="<? $appName ?>">
    <meta name="twitter:card" content="summary">

    <meta name="keywords" content="Music, Events, Records, Spinnin">

    <link rel="icon" type="image/x-icon" href="/spinnin_events/images/favicon.ico">
    <link rel="stylesheet" href="/spinnin_events/css/style.css">
</head>