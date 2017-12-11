<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$session = Yii::$app->session;
$session->open();

$this->title = 'Sistem Simulasi Distribusi Barang Aice';
?>
<div class="row">
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-10 col-sm-10">
        <center><h3>Masukkan jumlah Gudang Aice dan Jumlah Toko yang akan didistribusikan</h3></center>
        <br>
        <form action="<?=Url::to(['intro/next'])?>" method="POST">
            <div class="col-md-6 col-sm-6">
                <center><?php echo Html::img('@web/img/gudang.png',['class'=>'gudang-intro']) ?><br></center>
                <center><input type="text" name="gudang" placeholder="jumlah gudang aice" class="input-box"></center>
            </div>
            <div class="col-md-6 col-sm-6">
                <center><?php echo Html::img('@web/img/toko.png',['class'=>'opening-logo']) ?><br></center>
                <center><input type="text" name="toko" placeholder="jumlah toko aice" class="input-box"></center>
            </div>
            <center><button type="submit" class="btn btn-primary" style="margin : 30px auto; font-size : 15pt;">Lanjut</a></center>
        </form>
    </div>
    <div class="col-md-1 col-sm-1"></div>
</div>