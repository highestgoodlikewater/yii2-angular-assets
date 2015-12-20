<?php
namespace apas\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAnimateAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular-animate/angular-animate.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'apas\angular\AngularAsset'
    ];
}