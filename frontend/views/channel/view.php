<?php
/** @var $channel \common\models\User */
/** @var $this \yii\web\View */

?>

<div class="p-5 bg-body-tertiary border rounded-3">
    <h1 class="display-4">
        <?php echo $channel->username ?>
    </h1>
    <hr class="my-4">
    <?php \yii\widgets\Pjax::begin() ?>
        <?php echo $this->render('_subscribe', [
            'channel' => $channel,
        ]) ?>
    <?php \yii\widgets\Pjax::end() ?>
</div>