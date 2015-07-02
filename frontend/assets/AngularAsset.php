<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 *  Добавление Angular.JS скриптов
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
      'angular-material/angular-material.min.css',
      'angular-material-icons/angular-material-icons.css',
    ];

    public $js = [

        'angular/angular.min.js',
        'angular-route/angular-route.min.js',
        'angular-strap/dist/angular-strap.min.js',
        'angular-animate/angular-animate.min.js',
        'angular-aria/angular-aria.min.js',
        'angular-material/angular-material.min.js',
        'angular-material-icons/angular-material-icons.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
