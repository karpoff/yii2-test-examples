<?php
use karpoff\icrop\CropImageUpload;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

use yii\grid\GridView;

echo \yii\bootstrap\Button::widget(['options' => ['id' => 'button-add', 'href' => Url::to('crop/edit'), 'class' => 'btn btn-primary'], 'tagName' => 'a', 'label' => 'Add']);
echo GridView::widget(array_merge(['id' => 'list-grid'], $grid_config));
