<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php';?>

        <?php
        include_once '../backend/Date.php';
        include_once '../backend/Tournoi.php';
        include_once '../backend/Match.php';
        include "../backend/Config.php";
        use backend\Match;
        use backend\Tournoi;
        use backend\Date;
        $date    = new Date();
        $year    = \date('Y');
        $match   = $date->getMatch($year);
        $tournoi = $date->getTournoi($year);
        ?>
        <div class="container">
            <table class="table_event">
                <thead class="thead_event">
                    <tr>
                        <?php foreach ($date->attrTournoi as $attr) {?>
                            <th class="th_event"><?php echo '<p class="name_attr_tournoi">'.$attr.'</p>' ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tournoi as $t) {?>
                        <tr>
                            <?php $attr_tournois = $t->getAttr();?>
                            <?php foreach ($attr_tournois as $attrT) {?>
                                <td class="td_event">
                                    <?php echo '<p class="attr_tournoi">'.$attrT.'</p>'?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php }?>
                </tbody>
            </table>

            <table class="table_event">
                <thead class="thead_event">
                    <tr>
                        <?php foreach ($date->attrMatch as $attr) {?>
                            <th class="th_event"><?php echo '<p class="name_attr_match">'.$attr.'</p>' ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($match as $m) {?>
                    <tr>
                        <?php $attr_matchs = $m->getAttr();?>
                        <?php foreach ($attr_matchs as $attrM) {?>
                            <td class="td_event">
                                <?php echo '<p class="attr_match">'.$attrM.'</p>'?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <div class="form_event">
                <form action="../backend/AddMatch.php" method="post">
                    <h1>Ajouter un match</h1>
                    <div class="form-group">
                        <label for="date">Date du match</label>
                        <input type="date" class="form-control" name="date">
                    </div>

                    <div class="form-group">
                        <label for="time">Heure du match</label>
                        <input type="time" class="form-control" name="time">
                    </div>

                    <div class="form-group">
                        <label for="name">Nom du club Adverse</label>
                        <input type="text" class="form-control" name="nameCA">
                    </div>

                    <div class="form-group">
                        <label for="name">Lieu</label>
                        <input type="text" class="form-control" name="lieu">
                    </div>
                    //ajouter num du tournoi defilement
                    <div class="form-group">
                        <label for="numT">Numero du tournoi</label>
                        <input type="number" class="form-control" name="numT">
                    </div>
                    <button type="submit" class="btn btn-primary">Insérer</button>
                </form>

                <form action="" method="post">
                    <h1>Ajouter un tournoi</h1>
                    <div class="form-group">
                        <label for="date">Nom du tournoi</label>
                        <input type="date" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="datedeb">Date de commencement du tournoi</label>
                        <input type="date" class="form-control" name="datedeb">
                    </div>

                    <div class="form-group">
                        <label for="datefin">Date de fin du tournoi</label>
                        <input type="date" class="form-control" name="datefin">
                    </div>

                    <div class="form-group">
                        <label for="name">Lieu</label>
                        <input type="text" class="form-control" name="lieu">
                    </div>
                    <button type="submit" class="btn btn-primary">Insérer</button>
                </form>

            </div>
        </div>
        <?php include_once 'footer.php' ?>
    </body>
</html>