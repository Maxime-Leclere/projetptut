<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php';?>

        <?php
        include_once '../backend/Date.php';
        include "../backend/Config.php";
        use backend\Date;
        $date    = new Date();
        $year    = \date('Y');
        $match   = $date->getMatch($year);
        $tournoi = $date->getTournoi($year);
        ?>

        <table>
            <thead>
                <tr>
                    <?php foreach ($date->attrTournoi as $attr) {?>
                        <th><?php echo '<p class="name_attr_tournoi">'.$attr.'</p>' ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($tournoi as $t) {
                        $attr_tournoi = $t->getAttr();
                        foreach ($attr_tournoi as $attrT) {?>
                            <td><?php echo '<p class="attr_tournoi">'.$attrT.'</p>'?></td>
                        <?php } ?>
                    <?php }?>
                </tr>
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
            <tr>
                <?php foreach ($match as $m) {
                    $attr_match = $m->getAttr();
                    foreach ($attr_match as $attrM) {?>
                        <td>
                            <?php echo '<p class="attr_match">'.$attrM.'</p>'?>
                        </td>
                    <?php } ?>
                <?php }?>
            </tr>
            </tbody>
        </table>

        <?php include_once 'footer.php' ?>
    </body>
</html>