<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php include('header.php'); ?>

    <main>
        <div id="liste-oeuvres">
        <?php require 'oeuvres.php'; ?>
        <?php foreach($array as $k => $v) : ?>
            <article class="oeuvre">
                <a href="<?php echo $v['link']; ?>">
                    <?php echo $v['pictures']; ?>
                    <h2><?php echo $v['title']; ?></h2>
                    <p class="description"><?php echo $v['author']; ?></p>
                </a>
            </article>
        <?php endforeach ?>
        </div>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>