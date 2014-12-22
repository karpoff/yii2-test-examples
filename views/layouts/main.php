<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginPage()
?>

<!DOCTYPE html>
<head lang="ru">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div id="content"><?php echo $content; ?></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
