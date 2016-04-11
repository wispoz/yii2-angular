<?php
namespace wispoz\angularjs;
use yii\web\AssetBundle;
class AngularAsset extends AssetBundle
{
    public $sourcePath = 'bower-asset/angular';
    public $js = [
        'angular.js',
    ];
}
