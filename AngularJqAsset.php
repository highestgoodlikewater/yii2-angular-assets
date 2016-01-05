<?php
namespace apas\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularJqAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular/angular.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}