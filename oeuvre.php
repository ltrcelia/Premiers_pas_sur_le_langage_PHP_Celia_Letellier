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
       <?php //Vérifier que 'id' est bien dans l'URL//
            if(isset($_GET['id'])) {
                //Récupérer l'identifiant dans l'URL//
                $identifiant = $_GET['id'];
                //Rechercher dans le tableau l'oeuvre correspondant à l'identifiant//
                if (array_key_exists($identifiant, $array)) {
                // Si l'oeuvre existe, afficher son contenu //
                    $v = $array[$identifiant]; ?>
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
                    <?php //Si l'oeuvre n'existe pas, renvoie le message suivant// 
                        } else { echo "Cette page n'existe pas."; }} ?>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>
