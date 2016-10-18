<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/plugins/morris.css',
        'css/bootstrap.css',
        'css/sb-admin.css',
        'css/font-awesome/css/font-awesome.css'
    ];
    public $js = [
        'js/pugins/flot/excanvas.min.js',
        'js/pugins/flot/flot-data.js',
        'js/pugins/flot/jquery.flot.js',
        'js/pugins/flot/jquery.flot.pie.js',
        'js/pugins/flot/jquery.resize.js',
        'js/pugins/flot/jquery.flot.tooltip.min.js',
        'js/pugins/morris/morris-data.js',
        'js/pugins/morris/morris.js',
        'js/pugins/morris/morris.min.js',
        'js/pugins/morris/raphael.min.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'js/jquery',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
