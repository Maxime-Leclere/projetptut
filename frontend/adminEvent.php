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
                <thead class="thead-dark">
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
                <thead class="thead-dark">
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
        </div>
        <?php include_once 'footer.php' ?>
    </body>
</html>