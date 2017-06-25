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
class AceMinCssAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $css = [
        'css/ace.min.css',
    ];

    public $cssOptions = [
        'class'=>'ace-main-stylesheet',
        'id'=>'main-ace-style'
    ];
}
