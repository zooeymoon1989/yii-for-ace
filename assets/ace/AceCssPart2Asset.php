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
class AceCssPart2Asset extends AssetBundle
{
    public $sourcePath = '@webroot/src/ace_master';
    public $css = [
        'css/ace-part2.min.css'
    ];

    public $cssOptions = [
        'condition' => 'lte IE 9',
        'class'=>'ace-main-stylesheet'
    ];

}
