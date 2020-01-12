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
            <table>
                <thead>
                    <tr>
                        <?php foreach ($date->attrTournoi as $attr) {?>
                            <th><?php echo '<p class="name_attr_tournoi">'.$attr.'</p>' ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tournoi as $t) {?>
                        <tr>
                            <?php $attr_tournoi = $t->getAttr();?>
                            <?php foreach ($attr_tournoi as $attrT) {?>
                                <td>
                                    <?php echo '<p class="attr_tournoi">'.$attrT.'</p>'?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php }?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <?php foreach ($date->attrMatch as $attr) {?>
                            <th><?php echo '<p class="name_attr_match">'.$attr.'</p>' ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($match as $m) {?>
                    <tr>
                        <?php $attr_match = $m->getAttr();?>
                        <?php foreach ($attr_match as $attrM) {?>
                            <td>
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