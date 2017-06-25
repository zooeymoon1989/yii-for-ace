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
class AceExtraJsAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $js = [
        'js/ace-extra.min.js',
    ];

    public $jsOptions =[
        'position' =>View::POS_HEAD
    ];
}
