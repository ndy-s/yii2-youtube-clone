<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;

$this->beginContent('@backend/views/layouts/base.php')
?>
<main class="d-flex">
    <?php echo $this->render('_sidebar') ?>

    <div class="content-wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent() ?>