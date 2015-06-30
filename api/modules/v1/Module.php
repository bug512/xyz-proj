<?php
/**
 * Created by PhpStorm.
 * User: bug
 * Date: 22.06.15
 * Time: 19:07
 */

namespace api\modules\v1;
use Yii;
/**
 *  API V1 Module
 *
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';
    public function init()
    {
        parent::init();

    }
}