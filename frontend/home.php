<!DOCTYPE html>
<html lang="fr">
    <head>

        <?php include_once 'head.php' ?>
    </head>

    <body>
        <div class="container-fluid cf">
            <br>
            <h2>Bienvenue sur le site de L'AUCVB</h2>
            <h3>Aix-Université-Club 13 Volley-Ball</h3>
        </div>
        <?php include_once 'header.php' ?>

        <?php
        include_once '../backend/Date.php';
        include "../backend/Config.php";
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


        <div class="container" style="min-height: 770px">
            <div class="row">
                <div class="col-sm-8" style="background-color:white;">
<!--                    // article à inserer-->
                    <div class="card-header"><h2 class="article_title">ARTICLES</h2></div>
                    <?php if (isset($articles)) {
                        foreach ($articles as $a) {?>
                            <div class="article">
                                <?php echo $a; ?>
                            </div>
                        <?php }
                    }?>
                    <?php if ($_SESSION["Status"] == 2){?>
                        <div class="card-header">
                            <form enctype="multipart/form-data" action="../backend/AddArticle.php" method="post">
                                <div class="form-group">
                                    <label>Titre</label><br>
                                    <input type="text" id="Title" name="title" class="form-control" placeholder="taper votre titre" required><br>
                                </div>
                                <div class="form-group">
                                    <label>Image à insérer</label><br>
                                    <input type="file" name="image"><br>
                                </div>
                                <div class="form-group">
                                    <label>Texte</label><br>
                                    <textarea id="Text" name="text" placeholder="taper votre texte" class="form-control"></textarea><br>
                                </div>
                                <button type="submit" class="btn btn-warning">Envoyer</button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4" style="background-color:white;">
                    <div id="accordion"><br>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    PROCHAINS ÉVÉNEMENTS À DOMICILE
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show " data-parent="#accordion">
                                <?php if(!is_null($homeEvents)) {
                                    foreach ($homeEvents as $hE) {?>
                                        <div class="card-body ">
                                            <?php echo $hE; ?>
                                        </div>
                                    <?php }
                                    } else {?>
                                        <div class="card-body ">
                                            <h4 class="home_events_none">
                                                Aucun évènement à domicile programmer
                                            </h4>
                                        </div>
                                    <?php } ?>
                                <div class="card-header ">
                                    <a href="calendar.php">Voir tout les évènements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'footer.php' ?>
    </body>
</html>
