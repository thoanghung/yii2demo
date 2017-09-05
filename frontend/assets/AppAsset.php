<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      // 'css/site.css',
      'css/vendors/bootstrap/dist/css/bootstrap.min.css',
      'css/vendors/font-awesome/css/font-awesome.min.css',
      'css/vendors/nprogress/nprogress.css',
      'css/build/css/custom.min.css',

    ];
    public $js = [
      'css/vendors/jquery/dist/jquery.min.js',
      'css/vendors/bootstrap/dist/js/bootstrap.min.js',
      'css/vendors/fastclick/lib/fastclick.js',
      'css/vendors/nprogress/nprogress.js',
      'css/build/js/custom.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
