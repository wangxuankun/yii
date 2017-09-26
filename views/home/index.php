<?php
use \yii\helpers\Html;
use \yii\helpers\HtmlPurifier;
?>

<h1>hello index</h1>
<h2><?=$user['age']; ?></h2>
<h2><?=$data['ip']; ?></h2>
<h2><?=HTML::encode($data['str']); ?></h2>
<h2><?=HTMLPurifier::process($data['str']); ?></h2>

<?php echo $this->render('about');?>
