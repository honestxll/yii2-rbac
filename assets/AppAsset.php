<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use app\services\UrlService;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    // public $css = [
    //     '/assets/4d35bb2e/css/bootstrap.min.css'
    // ];
    // public $js = [
    //     '/assets/19c42710/jquery.min.js',
    //     '/assets/4d35bb2e/js/bootstrap.min.js'
    // ];

    public function registerAssetFiles( $view )
    {
        $version = "20191013";
        $this->css = [
            UrlService::buildUrl('/bootstrap4/css/bootstrap.min.css?', ['v' => $version]),
            UrlService::buildUrl('/css/app.css')
        ];
        $this->js = [
            UrlService::buildUrl('/assets/19c42710/jquery.min.js'),
            UrlService::buildUrl('/bootstrap4/js/bootstrap.min.js')
        ];
        parent::registerAssetFiles( $view );
    }
}
