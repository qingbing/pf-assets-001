<?php

use Components\AssetsManager;

/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-07-09
 * Version      :   1.0
 */
class Assets001
{
    private static $_assetUrl;

    /**
     * 发布资源
     * @throws \Helper\Exception
     */
    public static function publishAssets()
    {
        self::$_assetUrl = AssetsManager::getInstance('assets-manager')->publish(__DIR__ . '/source', '001');
    }

    /**
     * 获取发布资源的跟目录
     * @return mixed
     * @throws \Helper\Exception
     */
    public static function getAssetBaseUrl()
    {
        if (null === self::$_assetUrl) {
            self::publishAssets();
        }
        return self::$_assetUrl;
    }
}