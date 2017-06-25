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
class AceCssIeAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $css = [
        'ace-ie.min.css'
    ];

    public $cssOptions = [
        'condition' => 'lte IE 9',
    ];

}
