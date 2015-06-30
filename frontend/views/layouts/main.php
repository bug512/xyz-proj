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
    <div class="wrap">
        <?php
        AngularNavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => '#/',
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                    'bs-navbar' => '',
                ],
            ]);
            $menuItems = [
                ['options'=>['data-match-route'=>'/$'],'label' => 'Home', 'url' => '#/'],
                ['options'=>['data-match-route'=>'/about'],'label' => 'About', 'url' => '#/about'],
                ['options'=>['data-match-route'=>'/contact'],'label' => 'Contact', 'url' => '#/contact'],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['options'=>['data-match-route'=>'/signup'],'label' => 'Signup', 'url' => '#/signup'];
                $menuItems[] = ['options'=>['data-match-route'=>'/login'],'label' => 'Login', 'url' => '#/login'];
            } else {
                $menuItems[] = ['options'=>['data-match-route'=>'/logout'],
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => '#/logout',
                    'linkOptions' => ['data-method' => 'post']
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
        AngularNavBar::end();
        ?>

        <div  class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

            <div ng-view class="page {{ pageClass }}">
                <?= $content ?>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
