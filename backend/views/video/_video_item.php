<?php
/** @var $model \common\models\Video */

use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="d-flex">
    <a href="<?php echo Url::to(['/video/update', 'video_ id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9 mr-2" style="width: 120px">
            <video src="<?php echo $model->getVideoLink() ?>" poster="<?php echo $model->getThumbnailLink() ?>"></video>
        </div>
    </a>
    <div class="flex-grow-1 ms-3">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <?php echo StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>
