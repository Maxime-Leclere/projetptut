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
        use backend\Date;
        $date = new Date();
        $year = \date('Y');
        $month = \date('n');
        $dates = $date->getAll($year);
    ?>
    <div class="calendar">
        <div class="current_year_month"><?php echo $date->months[$month-1].' '.$year; ?></div>
        <div class="select_month">
            <a class="previous_month" href="#"><<<?php if ($month == 1) {
                    echo end($date->months);
                } else {
                    echo $date->months[$month-2];
                }?></a>
            <a class="next_month" href="#"><?php if ($month == 12) {
                    echo current($date->months);
                } else {
                    echo $date->months[$month];
                }?>>></a>
        </div>
        <?php $dates =current($dates);
        foreach ($dates as $m=>$days) { ?>
            <div class="daysofmonth">
                <table>
                    <thead>
                        <tr>
                            <?php foreach ($date->days as $d) {?>
                                <th><?php echo $d ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php $end = end($days);
                        foreach ($days as $d=>$w) { ?>
                            <?php if ($d == 1) { ?>
                                <td colspan="<?php echo $w-1; ?>"></td>
                            <?php } ?>
                            <td><?php echo $d; ?></td>
                            <?php if ($w == 7) { ?>
                                <tr></tr>
                            <?php } ?>
                        <?php } ?>
                        <?php if ($end != 7) { ?>
                            <td colspan="<?php echo 7-$end; ?>"></td>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>

    </div>
    <pre><?php print_r($dates); ?></pre>
</main>

<?php include_once 'footer.php' ?>
</body>
</html>