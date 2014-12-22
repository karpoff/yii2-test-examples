yii2-test-examples
==================

test examples

add db.php to config folder with following code (set db parameters correctly)

```php
<?php
return [
	'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=localhost;dbname=test',
	'username' => 'common',
	'password' => 'common',
	'charset' => 'utf8',
];
```

