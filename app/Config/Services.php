<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use duncan3dc\Laravel\BladeInstance;

class Services extends BaseService
{
    public static function blade($getShared = true): BladeInstance
    {
        if ($getShared) {
            return static::getSharedInstance('blade');
        }

        $views = APPPATH . 'Views';
        $cache = WRITEPATH . 'cache/blade';

        if (! is_dir($cache)) {
            mkdir($cache, 0777, true);
        }

        return new BladeInstance($views, $cache);
    }
}