<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Sistem Simulasi Distribusi Barang Aice';
?>
<center><h3>Masukkan biaya yang dibutuhkan dari Gudang <?=$gudang; ?> ke seluruh Toko</h3></center>
<br>
<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<form action="<?=Url::to(['rute/next'])?>" method="POST">
    <div class="tree">
        <ul>
            <li>
                <a href="#"><?php echo Html::img('@web/img/gudang.png',['class'=>'gudang4']) ?><br><h4>Gudang <?=$gudang; ?></h4></a>
                <ul>
                    <?php
                        for($i = 1; $i < $toko+1; $i++){
                    ?>
                            <li>
                                <a href="#"><input type="text" name="beban[<?=$gudang; ?>][<?=$i?>]" style="margin : 0px;" placeholder="biaya" class="input-box-small" required></a>
                                <ul>
                                    <li>
                                        <a href="#"><?php echo Html::img('@web/img/toko.png',['class'=>'gudang3']) ?><br><h5>Toko <?=$i?></h5></a>
                                    </li>
                                </ul>
                            </li>
                    <?php
                        }
                    ?>
                </ul>
            </li>
        </ul>
    </div>
    <center><button type="submit" class="btn btn-primary" style="margin : 30px auto; font-size : 12pt;">Lanjut</a></center>
</form>