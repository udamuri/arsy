<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\components\Constants;
use yii\widgets\ActiveForm;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(Yii::$app->homeUrl."js/index.js", ['depends' => [\yii\web\JqueryAsset::className()], 'position' =>  \yii\web\View::POS_HEAD]);
$this->registerJsFile(Yii::$app->homeUrl."js/menu.js", ['depends' => [\yii\web\JqueryAsset::className()], 'position' =>  \yii\web\View::POS_HEAD]);
//$this->registerJsFile(Yii::$app->homeUrl."assets/nestable/jquery.nestable.js", ['depends' => [\yii\web\JqueryAsset::className()] ]);
//$this->registerCssFile(Yii::$app->homeUrl."assets/nestable/style.css", ['depends' => [\yii\web\JqueryAsset::className()]]);
$token = $this->renderDynamic('return Yii::$app->request->csrfToken;');

$jsx = <<< 'SCRIPT'
    IndexObj.initialScript();
    MenuObj.initialScript();
SCRIPT;
$this->registerJs('IndexObj.baseUrl = "'. Yii::$app->homeUrl.'"', \yii\web\View::POS_HEAD);
$this->registerJs('IndexObj.csrfToken = "'. $token.'"',  \yii\web\View::POS_HEAD);
$this->registerJs($jsx);


?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-md-12 col-xs-12">
    <?php $form = ActiveForm::begin([
        'action' => Yii::$app->homeUrl.'menu',
        'id' => 'menu-form',
        'method' => 'post',
    ]) ?>

      <?= \udamuri\nestablemenu\TreeMenu::widget([
                'table_name'=>'nestamenu',
                'containerID' => 'nesta-menu',
                'output' => 'hidden',
                'delete_url' => 'delete-menu',
                'update_url' => 'update-menu',
                'button' => [
                    'save' => [
                        'id' => 'save-change',
                        'label' => 'Save Change',
                        'btn-class' => 'btn-primary',
                        'type' => 'submit'
                    ],
                    'add' => [
                        'id' => 'add-new',
                        'label' => 'Add New',
                        'btn-class' => 'btn-success',
                        'url' => 'create-menu'
                    ],
                ],
            ]); 
        ?>
    <?php ActiveForm::end() ?>
    </div>
</div>