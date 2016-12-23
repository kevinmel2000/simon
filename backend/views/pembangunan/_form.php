<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\TblDanaInfrastruktur;
use ibrarturi\latlngfinder\LatLngFinder

/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pembangunan')->hiddenInput(['value' => date('YmdHis')])->label(false) ?>

    <?= $form->field($model, 'id_dana_inf')->dropDownList(
        ArrayHelper::map(TblDanaInfrastruktur::find()->all(),'id_dana_inf', 'nama_dana'),
        ['prompt'=>'-Pilih Nama Dana-']) ?>

    <?= $form->field($model, 'nama_pembanguna')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto')->textInput() ?>

    <?= $form->field($model, 'lat') ?>
    <?= $form->field($model, 'lng') ?>
     
    <?= \ibrarturi\latlngfinder\LatLngFinder::widget([
        'model' => $model,              // model object
        'latAttribute' => 'lat',        // Latitude attribute
        'lngAttribute' => 'lng',        // Longitude attribute
        'zoomAttribute' => 'zoom',      // Zoom text attribute
        'mapCanvasId' => 'map',         // Map Canvas id
        'mapWidth' => 450,              // Map Canvas width
        'mapHeight' => 300,             // Map Canvas mapHeight
        'defaultLat' => -7.941298621458841,        // Default latitude for the map
        'defaultLng' => 111.49140357971191,         // Default Longitude for the map
        'defaultZoom' => 11,             // Default zoom for the map
        'enableZoomField' => true,      // True: for assigning zoom values to the zoom field, False: Do not assign zoom value to the zoom field
    ]); ?>

    <?= $form->field($model, 'anggaran')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'progres')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_admin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
