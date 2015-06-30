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
class PaceAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
      'pace/themes/blue/pace-theme-center-simple.css',
    ];

    public $js = [
        'pace/pace.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
