<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'head.php' ?>
</head>

<body>
<?php include_once 'header.php' ?>

<main class="custom_body">
    <?php
        $date = new Date();
        $year = \date('Y');
        $month = \date('n');
        $dates = $date->getAll($year);
    ?>
    <div class="calendar">
        <div class="current_year_month"><?php echo $date->months[$month-1].' '.$year; ?></div>
        <div class="select_month">
            <a class="previous_month" href="#"><<<?php echo $date->months[$month-2]; ?></a>
            <a class="next_month" href="#"><?php echo $date->months[$month]; ?>>></a>
        </div>

    </div>
    <pre><?php print_r($dates); ?></pre>
</main>

<?php include_once 'footer.php' ?>
</body>
</html>