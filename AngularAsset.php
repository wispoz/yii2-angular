<?php
namespace wispoz\angularjs;
use yii\web\AssetBundle;
class AngularAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular';
    public $js = [
        'angular.js',
    ];
}
