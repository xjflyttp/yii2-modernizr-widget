<?php

/**
 * Modernizr Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\modernizr;

use yii\web\AssetBundle;

class ModernizrAsset extends AssetBundle {

    public $sourcePath = '@bower/modernizr';
    public $js = ['modernizr.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
