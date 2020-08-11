<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>TaskForce</title>
	<?= Html::csrfMetaTags() ?>
	<?php $this->head()?>
</head>
<body class="landing">
<?php $this->beginBody()?>
<?= $content?>
<div class="overlay"></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
