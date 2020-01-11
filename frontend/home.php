<!DOCTYPE html>
<html lang="fr">
    <head>

        <?php include_once 'head.php' ?>
    </head>

    <body>
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


        <div class="container" style="height: 100%"><br>
            <div class="row">
                <div class="col-sm-8" style="background-color:lavender;">
                    <h2>iefhj</h2>
                    // article à inserer
                    <h1>Articles</h1>
                    <?php if (isset($articles)) {
                        foreach ($articles as $a) {?>
                            <div class="article">
                                <?php echo $a; ?>
                            </div>
                        <?php }
                    }?>
                </div>
                <div class="col-sm-4" style="background-color:lavenderblush;">
                    <div id="accordion"><br>
                        <div class="card">
                            <div class="card-header ">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    PROCHAINS ÉVÉNEMENTS À DOMICILE
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show " data-parent="#accordion">
                                <div class="card-body ">
                                    // evenement à inserer
                                    <?php if(isset($homeEvents)) {
                                        foreach ($homeEvents as $hE) {?>
                                            <?php echo $hE; ?>
                                        <?php }
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="articles">-->
<!--            <h1>Articles</h1>-->
<!--            --><?php //if (isset($articles)) {
//                foreach ($articles as $a) {?>
<!--                <div class="article">-->
<!--                    --><?php //echo $a; ?>
<!--                </div>-->
<!--            --><?php //}
//            }?>
<!--        </div>-->
<!--        <div class="homeEvents">-->
<!--            <h1>Prochains évènements à domicile</h1>-->
<!--            --><?php //if(isset($homeEvents)) {
//                foreach ($homeEvents as $hE) {?>
<!--                    <div class="homeEvent">-->
<!--                        --><?php //echo $hE; ?>
<!--                    </div>-->
<!--                --><?php //}
//            }?>
<!--        </div>-->
        <a href="calendar.php">Voir tout les évènements</a>
        <form enctype="multipart/form-data" action="../backend/AddArticle.php" method="post">
            <label>Titre</label><br>
            <input type="text" id="Title" name="title" placeholder="taper votre titre" required><br>
            <input type="file" name="image"><br>
            <label>Texte</label><br>
            <textarea id="Text" name="text" placeholder="taper votre texte"></textarea><br>
            <button type="submit">envoyer</button>
        </form>
        <?php include_once 'footer.php' ?>
    </body>
</html>