<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>
        <?php
        $listComment = $managerC->getFromArticle(intval($_GET['article']));
        ?>

        <div class="container" style="min-height: 770px">

        </div>

        <?php include_once 'footer.php' ?>
    </body>
</html>
