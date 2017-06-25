<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets\ace;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AceLteIe8JsAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $js = [
        'js/html5shiv.min.js',
        'js/respond.min.js'
    ];

    public $jsOptions =[
        'condition' => 'lte IE 8',
        'position' =>View::POS_HEAD
    ];
}
