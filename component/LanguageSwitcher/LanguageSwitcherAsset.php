<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23.03.16
 * Time: 13:50
 */
namespace app\LanguageSwitcher;

use yii\web\AssetBundle;

class LanguageSwitcherAsset extends AssetBundle
{
    public $js = [

    ];

    public $css = [
        'css/languageSwitcher.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        parent::init();
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";

    }
}