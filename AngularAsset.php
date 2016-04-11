<?php
/**
 * @link http://www.tesjin.ru/
 * @copyright Copyright (c) 2014 TesJin Group
 * @license BSD-3-Clause
 */

namespace wispoz\angularjs;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [angular javascript library](https://angularjs.org/)
 *
 * @author Vladislav Orlov <orlov@tesjin.ru>
 * @author wispoz <wispoz@inbox.ru>
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = 'bower-asset/angular';
    public $js = [
        'angular.js',
    ];
}
