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
class AceCssSkinsAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $css = [
        'css/ace-skins.min.css',
        'css/ace-rtl.min.css'
    ];
}
