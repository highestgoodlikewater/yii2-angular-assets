<?php
namespace apas\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularRouteAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular-route/angular-route.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'apas\angular\AngularAsset'
    ];
}