<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-expand-lg navbar-light bg-light shadow-sm',
    ],
]);
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}
?>
    <form action="<?php echo Url::to(['/video/search']) ?>"
          class="d-flex"
          role="search"
    >
        <input class="form-control me-2"
               type="search"
               placeholder="Search"
               name="keyword"
               value="<?php echo Yii::$app->request->get('keyword') ?>"
        >
        <button class="btn btn-outline-success">Search</button>
    </form>
<?php

echo Nav::widget([
    'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
    'items' => $menuItems,
]);
NavBar::end();