<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <main class="custom_body">
            <?php
            include_once '../backend/Date.php';
            include_once ("../backend/Config.php");
            use backend\Date;
            $date   = new Date();
            $year   = \date('Y');
            $month  = \date('m');
            $day    = \date('d');
            $hour   = \date('H');
            $min    = \date('i');
            $sec    = \date('s');
            $articles = $date->getArticles($year);
            $homeEvents = $date->getHomeEvents($year);
            ?>
            <div class="articles">
                <h1>Articles</h1>
                <?php if (isset($articles)) {
                    foreach ($articles as $a) {?>
                    <div class="article">
                        <?php echo $a; ?>
                    </div>
                <?php }
                }?>
            </div>

            <div class="homeEvents">
                <h1>Prochains évènements à domicile</h1>
                <?php if(isset($homeEvents)) {
                    foreach ($homeEvents as $hE) {?>
                        <div class="homeEvent">
                            <?php echo $hE; ?>
                        </div>
                    <?php }
                }?>
            </div>
            <a href="calendar.php">Voir tout les évènements</a>

            <form enctype="multipart/form-data" action="../backend/AddArticle.php" method="post">
                <label>Titre</label><br>
                <input type="text" id="Title" name="title" placeholder="taper votre titre" required><br>
                <input type="file" name="image"><br>
                <label>Texte</label><br>
                <textarea id="Text" name="text" placeholder="taper votre texte"></textarea><br>
                <button type="submit">envoyer</button>
            </form>
        </main>
        <?php include_once 'footer.php' ?>
    </body>
</html>