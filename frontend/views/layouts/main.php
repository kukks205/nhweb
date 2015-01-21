<?php

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <?= Html::encode($this->title) ?>


    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php //Html::csrfMetaTags() ?>
        <title>สสอ.หนองหาน <?php echo Html::encode($this->title)     ?></title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="../themes/fb/lib/boostrap-3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="../themes/fb/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../themes/fb/lib/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="../themes/fb/css/mystyles.css" rel="stylesheet">
        <?php //$this->head() ?>
    </head>

    <body>

        <div class="wrap">
            <div class="row row-offcanvas row-offcanvas-left">
                <?php
                include 'header.php';
                ?>
                <div  class="container">
                    <div class="padding">
                        <div class="full col-sm-12">
                            <?php
                            include 'leftside.php';
                            ?>
                            <div class="col-sm-6" style="padding: 3px;">
                                <?= Alert::widget() ?>
                                <?= $content ?>   
                            </div>
                            <?php
                            include 'rightside.php';
                            ?>                            
                        </div>
                    </div>
                </div>






            </div>
        </div>    






        <script src="../themes/fb/js/jquery-2.1.3.js"></script>
        <script src="../themes/fb/lib/boostrap-3.3.1/js/bootstrap.min.js"></script>
        <script src="../themes/fb/js/scripts.js"></script>
    </body>
</html>

