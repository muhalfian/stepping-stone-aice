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
        <center><h3>Masukkan jumlah stok Gudang Aice</h3></center>
        <br>
        <form action="<?=Url::to(['gudang/next'])?>" method="POST">
            <?php
                
                for($i = 1; $i < $gudang+1; $i++){
            ?>
                <div class="col-md-12 col-sm-12" style="margin : 10px 0px;">
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-md-4 col-sm-4">
                        <div class="col-md-6 col-sm-6">
                            <?php echo Html::img('@web/img/gudang.png',['class'=>'gudang2']) ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h5>Gudang <?=$i;?></h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="gudang[<?=$i;?>]" placeholder="stok aice" class="input-box-small">
                        <?php echo Html::img('@web/img/aice_open.png',['class'=>'aice-small']) ?>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                </div>
            <?php
                }
            ?>
            <center><button type="submit" class="btn btn-primary" style="margin : 30px auto; font-size : 12pt;">Lanjut</a></center>
        </form>
    </div>
    <div class="col-md-1 col-sm-1"></div>
</div>