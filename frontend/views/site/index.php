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
$slide = Yii::$app->mycomponent->getSlide();
$i = 0; 
?>

<section id="mySlider" class="carousel slide" data-ride="carousel" data-interval="10000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if(count($slide) > 1){ ?>
            <?php foreach($slide as $value) { 
                $i++;
                $active = ''; 
                if($i == 1) { $active = 'active'; }    
            ?>
                <div class="slidebg1 item <?=$active;?>">
                    <img class="mycarouselimage" src="<?=$value['post_content']?>" alt="First">
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

                                <h3><?=$value['post_title']?></h3>
                                <p><?=$value['post_excerpt']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
      <?php } else { ?>
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
      <?php } ?>
    </div>
    <hr class="transition-timer-carousel-progress-bar" />
</section>

<section class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Selamat Datang</h4>
                <?php
                  $_blog_desc = Yii::$app->mycomponent->frontendOptions('_blog_description');
                  $blogdesc = '';
                  if($_blog_desc)
                  {
                      $blogdesc = Html::decode($_blog_desc['option_value']);
                  }
                ?>
                <p class="no-magin">
                    <?=$blogdesc;?>
                </p>
            </div>

            <!--<div class="col-md-3 text-right">
                <button class="btn btn-success">Readmore</button>
            </div>-->
        </div>
    </div>
</section>

<section class="main-service">
    <div class="container">
        <div class="row margin-bottom20">
            <div class="col-md-12">
                <h3 class="text-center">Katalog</h3>
            </div>
        </div>

        <div id="mycarouselx" class="row margin-top20">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                  <div class="carousel-inner">
                    <?php for($i=1;$i<=15;$i++) { 
                      $active = $i == 1 ? "active":"" ;
                    ?>
                    <div class="item <?php echo $active;?>">
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">Panel heading without title</div>
                            <div class="panel-body">
                                <div class="image-header">
                                    <div class="img-product">
                                      <div class="img-container">
                                          <img src="https://static.pexels.com/photos/37651/ghana-fischer-water-37651.jpeg" >
                                      </div>
                                    </div>
                                </div>

                                <div class="caro-text">
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </div>
                            </div>
                            <div class="panel-footer">Panel footer</div>
                          </div> 
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
                <!-- end -->
            </div>
            <div class="clearfix"></div>
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