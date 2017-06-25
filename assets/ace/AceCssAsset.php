<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets\ace;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AceCssAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/4.5.0/css/font-awesome.min.css',
        'css/fonts.googleapis.com.css',
    ];
}
