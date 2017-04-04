<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php
        $_blog_name = Yii::$app->mycomponent->frontendOptions('_blog_name');
        $blogname = Html::encode($this->title);
        if($_blog_name)
        {
            $blogname = Html::encode($_blog_name['option_value']);
        }

        $_blog_name = Yii::$app->mycomponent->frontendOptions('_meta_title');
        $title = Html::encode($this->title);
        if($_blog_name)
        {
            $title = Html::encode($_blog_name['option_value']);
        }

        $_blog_name = Yii::$app->mycomponent->frontendOptions('_meta_description');
        $blogdesc = Html::encode($this->title);
        if($_blog_name)
        {
            $blogdesc = Html::encode($_blog_name['option_value']);
        }
    ?>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$blogdesc;?>">
    <?= Html::csrfMetaTags() ?>

   

    <title><?=  $title ; ?></title>
    <link rel="icon" href="<?=Yii::$app->homeUrl;?>/css/img/logo_50.png?<?=time();?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <?php
    NavBar::begin([
        'brandLabel' => $blogname,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '<i class="fa fa-home"></i>&nbsp;Home', 'url' => ['/home']],
    ];

    $menuItems[] = Yii::$app->mycomponent->treeMenu();
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
        'encodeLabels' => false ,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
    
    <?= $content ?>
    
<footer id="footer">
    <div class="container">
        <div class="col-md-6">
            &copy;  <?= Yii::$app->name.' '.Yii::$app->mycomponent->getCopy(2015); ?>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
