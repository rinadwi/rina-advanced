<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KelasTahunAjaran */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kelas Tahun Ajaran',
]) . $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kelas Tahun Ajaran'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kelas-tahun-ajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
