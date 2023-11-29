<?php
/** @var $model \common\models\Video */

use yii\helpers\Url;

?>

<div class="card flex m-3" style="width: 14rem;">

    <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9">
            <video src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"
            ></video>
        </div>

    </a>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
        <p class="text-muted m-0"><?php echo $model->getViews()->count() ?> views . <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></p>
    </div>
</div>
