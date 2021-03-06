<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\components\AngularNavBar;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>paceOptions = {ajax: {trackMethods: ['GET', 'POST']}};</script>
</head>
<body layout="column">
    <?php $this->beginBody() ?>
        <div  class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

            <div ng-view class="{{ pageClass }}">
                <?= $content ?>
            </div>

        </div>

<!--    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>
        <p class="pull-right"><?/*= Yii::powered() */?></p>
        </div>
    </footer>
-->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
