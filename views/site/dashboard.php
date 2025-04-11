<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Sd;
use app\models\Tk;
use app\models\Smp;
use app\models\FormTk;
use app\models\FormSd;
use app\models\FormSmp;
use app\models\Pekerjaan;
use app\models\Penghasilan;
use miloschuman\highcharts\Highcharts;
use yii\widgets\LinkPager;

// use app\models\User;
/* @var $this yii\web\View */

$this->title = 'Sistem Informasi Sekolah Quran Al-Izzah';
?>

<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
  <div class="site-index">
    <small>Selamat datang di Dashboard Al-Izzah. Silahkan kelola kebutuhan Anda dengan baik.</small>
    <br>
    <br>
    <div class="row" style="margin: 3px;">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <p>SD</p>

            <h3><?= Yii::$app->formatter->asInteger(Sd::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <p>TK</p>

            <h3><?= Yii::$app->formatter->asInteger(Tk::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
          <div class="inner">
            <p>SMP</p>

            <h3><?= Yii::$app->formatter->asInteger(Smp::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <p>DATA TK</p>

            <h3><?= Yii::$app->formatter->asInteger(FormTk::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-database"></i>
          </div>
          <a href="<?=Url::to(['form-tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row" style="margin: 3px;">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?= Yii::$app->formatter->asInteger(FormSd::getCount()); ?></h3>
            <p>DATA SD</p>
          </div>
          <div class="icon">
            <i class="fa fa-database"></i>
          </div>
          <a href="<?=Url::to(['form-sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?= Yii::$app->formatter->asInteger(FormSmp::getCount()); ?><sup style="font-size: 20px"></sup></h3>
            <p>DATA SMP</p>
          </div>
          <div class="icon">
            <i class="fa fa-database"></i>
          </div>
          <a href="<?=Url::to(['form-smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3><?= Yii::$app->formatter->asInteger(Pekerjaan::getCount()); ?></h3>
            <p>Pekerjaan</p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?=Url::to(['pekerjaan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= Yii::$app->formatter->asInteger(Penghasilan::getCount()); ?></h3>
            <p>Penghasilan</p>
          </div>
          <div class="icon">
            <i class="fa fa-money"></i>
          </div>
          <a href="<?=Url::to(['penghasilan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
    </div>
  <?php endif ?>

  <?php if (Yii::$app->user->identity->id_user_role == 2): ?>
    <div class="site-index">
      <small>Selamat datang di Dashboard Al-Izzah. Silahkan kelola kebutuhan Anda dengan baik.</small>
      <br>
      <br>
      <div class="row" style="margin: 3px;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p>SD</p>

              <h3><?= Yii::$app->formatter->asInteger(Sd::getCount()); ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
            <a href="<?=Url::to(['sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <p>TK</p>

              <h3><?= Yii::$app->formatter->asInteger(Tk::getCount()); ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
            <a href="<?=Url::to(['tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <p>SMP</p>

              <h3><?= Yii::$app->formatter->asInteger(Smp::getCount()); ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
            <a href="<?=Url::to(['smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-white">
            <div class="inner">
              <p>DATA TK</p>

              <h3><?= Yii::$app->formatter->asInteger(FormTk::getCount()); ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="<?=Url::to(['form-tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row" style="margin: 3px;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= Yii::$app->formatter->asInteger(FormSd::getCount()); ?></h3>
              <p>DATA SD</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="<?=Url::to(['form-sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= Yii::$app->formatter->asInteger(FormSmp::getCount()); ?><sup style="font-size: 20px"></sup></h3>
              <p>DATA SMP</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="<?=Url::to(['form-smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?= Yii::$app->formatter->asInteger(Pekerjaan::getCount()); ?></h3>
              <p>Pekerjaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-wrench"></i>
            </div>
            <a href="<?=Url::to(['pekerjaan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= Yii::$app->formatter->asInteger(Penghasilan::getCount()); ?></h3>
              <p>Penghasilan</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?=Url::to(['penghasilan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
      </div>
    <?php endif ?>


    <?php if (Yii::$app->user->identity->id_user_role == 3): ?>
      <div class="site-index">
        <small>Selamat datang di Dashboard Al-Izzah. Silahkan kelola kebutuhan Anda dengan baik.</small>
        <br>
        <br>
        <div class="row" style="margin: 3px;">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <p>SD</p>

                <h3><?= Yii::$app->formatter->asInteger(Sd::getCount()); ?></h3>
              </div>
              <div class="icon">
                <i class="fa fa-user-o"></i>
              </div>
              <a href="<?=Url::to(['sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <p>TK</p>

                <h3><?= Yii::$app->formatter->asInteger(Tk::getCount()); ?></h3>
              </div>
              <div class="icon">
                <i class="fa fa-user-o"></i>
              </div>
              <a href="<?=Url::to(['tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-gray">
              <div class="inner">
                <p>SMP</p>

                <h3><?= Yii::$app->formatter->asInteger(Smp::getCount()); ?></h3>
              </div>
              <div class="icon">
                <i class="fa fa-user-o"></i>
              </div>
              <a href="<?=Url::to(['smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p>DATA TK</p>

                <h3><?= Yii::$app->formatter->asInteger(FormTk::getCount()); ?></h3>
              </div>
              <div class="icon">
                <i class="fa fa-database"></i>
              </div>
              <a href="<?=Url::to(['form-tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row" style="margin: 3px;">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?= Yii::$app->formatter->asInteger(FormSd::getCount()); ?></h3>
                <p>DATA SD</p>
              </div>
              <div class="icon">
                <i class="fa fa-database"></i>
              </div>
              <a href="<?=Url::to(['form-sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?= Yii::$app->formatter->asInteger(FormSmp::getCount()); ?><sup style="font-size: 20px"></sup></h3>
                <p>DATA SMP</p>
              </div>
              <div class="icon">
                <i class="fa fa-database"></i>
              </div>
              <a href="<?=Url::to(['form-smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3><?= Yii::$app->formatter->asInteger(Pekerjaan::getCount()); ?></h3>
                <p>Pekerjaan</p>
              </div>
              <div class="icon">
                <i class="fa fa-wrench"></i>
              </div>
              <a href="<?=Url::to(['pekerjaan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?= Yii::$app->formatter->asInteger(Penghasilan::getCount()); ?></h3>
                <p>Penghasilan</p>
              </div>
              <div class="icon">
                <i class="fa fa-money"></i>
              </div>
              <a href="<?=Url::to(['penghasilan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
        </div>
      <?php endif ?>


      <?php if (Yii::$app->user->identity->id_user_role == 4): ?>
        <div class="site-index">
          <small>Selamat datang di Dashboard Al-Izzah. Silahkan kelola kebutuhan Anda dengan baik.</small>
          <br>
          <br>
          <div class="row" style="margin: 3px;">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <p>SD</p>

                  <h3><?= Yii::$app->formatter->asInteger(Sd::getCount()); ?></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-user-o"></i>
                </div>
                <a href="<?=Url::to(['sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <p>TK</p>

                  <h3><?= Yii::$app->formatter->asInteger(Tk::getCount()); ?></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-user-o"></i>
                </div>
                <a href="<?=Url::to(['tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <p>SMP</p>

                  <h3><?= Yii::$app->formatter->asInteger(Smp::getCount()); ?></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-user-o"></i>
                </div>
                <a href="<?=Url::to(['smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <p>DATA TK</p>

                  <h3><?= Yii::$app->formatter->asInteger(FormTk::getCount()); ?></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a href="<?=Url::to(['form-tk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

          <div class="row" style="margin: 3px;">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?= Yii::$app->formatter->asInteger(FormSd::getCount()); ?></h3>
                  <p>DATA SD</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a href="<?=Url::to(['form-sd/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?= Yii::$app->formatter->asInteger(FormSmp::getCount()); ?><sup style="font-size: 20px"></sup></h3>
                  <p>DATA SMP</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a href="<?=Url::to(['form-smp/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?= Yii::$app->formatter->asInteger(Pekerjaan::getCount()); ?></h3>
                  <p>Pekerjaan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-wrench"></i>
                </div>
                <a href="<?=Url::to(['pekerjaan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?= Yii::$app->formatter->asInteger(Penghasilan::getCount()); ?></h3>
                  <p>Penghasilan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="<?=Url::to(['penghasilan/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
          <?php endif ?>