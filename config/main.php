<?php

$config = [
	'id' => 'test',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],

	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'PRVAjfPfbgSu7mrx7bIY8zjIr3DzraD9',
		],
		'urlManager' => array(
			'showScriptName' => false,
			'enablePrettyUrl' => true,
			'rules' => array(
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				'<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
			),
		),

		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db' => require 'db.php',
	],
	'params' => [],
];


return $config;



