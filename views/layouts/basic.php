<?php
use app\assets\AppAsset;
/*
 * @var $content string
 * @var $this \yii\web\View
 */
AppAsset::register($this); // Регистрируем AppAsset
$this->beginPage(); // Метка начала документа
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Yii::$app->name ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
    <p>Верхняя часть сайта</p>

    <?= $content; ?>

    <p>Нижняя часть сайта</p>
<?php $this->endBody(); ?>
</body>
</html>
<?php
    $this->endPage(); // Метка конца страницы
?>