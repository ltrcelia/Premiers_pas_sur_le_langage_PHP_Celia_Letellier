<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php include('header.php'); ?>

    <main>
        <?php require 'oeuvres.php'; ?>
        <?php foreach($array as $k => $v)
                if($_GET['id'] == $v['id']): ?>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <?php echo $v['pictures']; ?>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $v['title']; ?></h1>
                <p class="description"><?php echo $v['author']; ?></p>
                <p class="description-complete"><?php echo $v['description']; ?></p>
            </div>
        </article>
        <?php endif ?>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>
