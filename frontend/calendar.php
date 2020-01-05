<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">
            jQuery(function ($){
                $('.daysofmonth').hide();
                $('.daysofmonth:first').show();
                $('.monthName').hide();
                var current = 1;
                $('#link_month'+current).show();
                $('.previous_month').addClass('active');
                $('.next_month').addClass('active');
                $('.previous_month').click(function() {
                    if(current === 1) {
                        $('#month'+current).slideUp();
                        $('#link_month'+current).hide();
                        current = 12;
                        $('#link_month'+current).show();
                        $('#month'+current).slideDown();
                    } else {
                        $('#link_month'+current).hide();
                        $('#month'+current).slideUp();
                        --current;
                        $('#link_month'+current).show();
                        $('#month'+current).slideDown();
                    }
                });
                $('.next_month').click(function() {
                    if (current === 12) {
                        $('#link_month'+current).hide();
                        $('#month'+current).slideUp();
                        current = 1;
                        $('#link_month'+current).show();
                        $('#month'+current).slideDown();
                    } else {
                        $('#link_month'+current).hide();
                        $('#month'+current).slideUp();
                        ++current;
                        $('#link_month'+current).show();
                        $('#month'+current).slideDown();
                    }
                });
            });
        </script>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <main class="custom_body">
            <?php
                include_once '../backend/Date.php';
                include_once 'config.php';
                use backend\Date;
                $date   = new Date();
                $year   = \date('Y');
                $month  = \date('n');
                $events = $date->getEvents($year);
                $dates  = $date->getAll($year);
            ?>
            <div class="calendar">
                <div class="current_year_month">
                    <div class="months">
                        <?php foreach ($date->months as $id=>$m) { ?>
                            <div class="monthName" id="link_month<?php echo $id+1; ?>">
                                <?php echo $m.' '.$year; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="select_month">
                    <a class="previous_month" href="#"><< Mois précédent</a>
                    <a class="next_month" href="#">Mois suivant >></a>
                </div>
                <?php $dates = current($dates);
                foreach ($dates as $m=>$days) { ?>
                    <div class="daysofmonth" id="month<?php echo $m; ?>">
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
                                foreach ($days as $d=>$w) {
                                    $time = strtotime("$year-$m-$d");?>
                                    <?php if ($d == 1) { ?>
                                        <?php if($w != 1) { ?>
                                            <td colspan="<?php echo $w-1; ?>"></td>
                                        <?php } ?>
                                    <?php } ?>
                                    <td>
                                        <?php echo $d; ?>
                                        <ul class="events">
                                            <?php if(isset($events[$time])) {
                                                foreach ($events[$time] as $e) {?>
                                                    <li><?php echo $e; ?></li>
                                                <?php }
                                            }?>
                                        </ul>
                                    </td>
                                    <?php if ($w == 7) { ?>
                                        </tr><tr>
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

            <pre><?php print_r($events); ?></pre>
        </main>

        <?php include_once 'footer.php'; ?>
    </body>
</html>