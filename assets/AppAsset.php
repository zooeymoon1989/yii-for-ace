<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'app\assets\ace\AceCssAsset',
        'app\assets\ace\AceMinCssAsset',
        'app\assets\ace\AceCssPart2Asset',
        'app\assets\ace\AceCssSkinsAsset',
        'app\assets\ace\AceCssIeAsset',
        'app\assets\ace\AceExtraJsAsset',
        'app\assets\ace\AceLteIe8JsAsset',
        'app\assets\ace\AceJqueryAsset',
        'app\assets\ace\AceJqueryForIeAsset',
        'app\assets\ace\AceJsAsset'
    ];
}
