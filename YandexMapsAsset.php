<?php
/**
 * Created by PhpStorm.
 * Date: 30.06.2016
 * Time: 22:24
 */

namespace gromovfjodor\yandexMap;

use yii\web\AssetBundle;

class YandexMapsAsset extends AssetBundle
{
    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU'
    ];
}