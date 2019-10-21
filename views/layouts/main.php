<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php $this->
    registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->
    head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <!-- 导航条 -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">RBAC</a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">首页</a>
          </li>
        </ul>
        <span class="navbar-text">Hi,你好...</span>
      </div>
    </nav>
    <!-- 菜单 -->
    <div class="container-fluid py-3 no-gutters">
      <div class="row">
        <div class="col-2">
          <div class="nav flex-column nav-pills">
            <h3>权限演示页面</h3>
            <a class="nav-link">测试页面一</a>
            <a class="nav-link">测试页面二</a>
            <a class="nav-link">测试页面三</a>
            <a class="nav-link">测试页面四</a>
            <h3>系统设置</h3>
            <a class="nav-link">用户管理</a>
            <a class="nav-link">角色管理</a>
            <a class="nav-link">权限管理</a>
        </div>
        </div>
        <div class="col-10">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Exercitationem aut illum consequatur earum praesentium amet, tempora
          itaque voluptatem hic excepturi, ad officiis quo dolor impedit dolores
          similique? Officiis, eveniet unde.
        </div>
      </div>
    </div>

    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
