<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\components\Constants;

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
$this->registerJsFile(Yii::$app->homeUrl."js/index.js", ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Yii::$app->homeUrl."js/home.js", ['depends' => [\yii\web\JqueryAsset::className()]]);
// $this->registerCssFile(Yii::$app->homeUrl.'css/lates_product.css', [
//     'depends' => [\yii\bootstrap\BootstrapAsset::className()],
//     //'media' => 'print',
// ]);

$jsx = <<< 'SCRIPT'
    HomeObj.initialScript();
    IndexObj.initialScript();
SCRIPT;
$this->registerJs('IndexObj.baseUrl = "'. Yii::$app->homeUrl.'"');
$this->registerJs('HomeObj.baseUrl = "'. Yii::$app->homeUrl.'"');
$this->registerJs($jsx);

?>

<section id="mySlider" class="carousel slide" data-ride="carousel" data-interval="10000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="slidebg1 item active">
          <img class="mycarouselimage" src="<?=Yii::$app->homeUrl?>template/img/1.jpg" alt="First">
          <div class="carousel-caption">
              <div class="container">
                <div class="caption-container">
                    <div class="row">
                        <div class="col-xs-6">
                            
                        </div>
                        <div class="col-xs-6">
                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>

                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          
                        </div>
                    </div>

                    <h3>First</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>
          </div>
      </div>

      <div class="slidebg2 item">
        <img class="mycarouselimage" src="<?=Yii::$app->homeUrl?>template/img/2.jpg" alt="Chania">
        <div class="carousel-caption">
              <div class="container">
                <div class="caption-container">
                    <div class="row">
                        <div class="col-xs-6">
                            
                        </div>

                        <div class="col-xs-6">

                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>

                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          
                        </div>
                    </div>

                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>
          </div>
      </div>

      <div class="slidebg3 item">
        <img class="mycarouselimage" src="<?=Yii::$app->homeUrl?>template/img/3.jpg" alt="Flower">
        <div class="carousel-caption">
              <div class="container">
                <div class="caption-container">
                    <div class="row">
                        <div class="col-xs-6">
                            
                        </div>

                        <div class="col-xs-6">

                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>

                          <a class="pull-right btn-nex-prev" href="#mySlider" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          
                        </div>
                    </div>

                    <h3>Flower</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>
          </div>
      </div>
    </div>
    <hr class="transition-timer-carousel-progress-bar" />
</section>

<section class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>Lorem Ipsum Dolor Sit Amet</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
            </div>

            <div class="col-md-3">
                <button class="btn btn-success">Readmore</button>
            </div>
        </div>
    </div>
</section>

<section class="main-service">
    <div class="container">
        <div class="row margin-bottom20">
            <div class="col-md-12">
                <h3 class="text-center">Instrument</h3>
                <p class="lead text-center">is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="row margin-bottom20">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-desktop"></i> Gitar</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-pencil"></i> Pianao</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-key"></i> Drum</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>
        </div>

        <div class="row margin-bottom20">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-anchor"></i> Biola</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-ban"></i> Gitar Klasik</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-bug"></i> Bass Gitar</h4>
                <p class="no-magin">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </p>
                <p><a href="/">More...</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success pull-right">More</button>
            </div>
        </div>

    </div>
</section>

<section class="main-work">
    <div class="container">
        <div class="row margin-bottom20">
            <div class="col-md-12">
                <h3 class="text-center">Our Recent Works</h3>
                <p class="lead text-center">is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>

    </div>
</section>

<section class="main-patner">
    <div class="container">
        <div class="row margin-bottom20">
            <div class="col-md-12">
                <h3 class="text-center">Our Partners</h3>
                <p class="lead text-center">is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>

    </div>
</section>

<section class="main-company">
      <div class="container">
        <div class="row margin-bottom20">
          <div class="col-md-4">
              <h4><i class="fa fa-map"></i> ADDRESS</h4>

              <ul>
                <li>
                    Address : Lorem Ipsum
                </li>
                <li>
                    Email : Lorem Ipsum
                </li>
                <li>
                    Phone : Lorem Ipsum
                </li>
              </ul>
          </div>

          <div class="col-md-4">
              <h4><i class="fa fa-building"></i> COMPANY</h4>

              <ul>
                <li>
                    Address : Lorem Ipsum
                </li>
                <li>
                    Email : Lorem Ipsum
                </li>
                <li>
                    Phone : Lorem Ipsum
                </li>
              </ul>
          </div>

          <div class="col-md-4">
              <h4><i class="fa fa-image"></i> GALLERY</h4>

              <ul>
                <li>
                    Address : Lorem Ipsum
                </li>
                <li>
                    Email : Lorem Ipsum
                </li>
                <li>
                    Phone : Lorem Ipsum
                </li>
              </ul>
          </div>

        </div>
      </div>
</section>