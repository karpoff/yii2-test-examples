<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class SiteController extends Controller
{
	public function actionIndex()
	{
		$data = [];
		return $this->render('index', $data);
	}
}
