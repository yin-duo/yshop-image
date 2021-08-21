<?php

namespace yshop;

use think\Config;
use think\Route;
use think\Service;

class ImageService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/image', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'Image';
                $data['statement'] = '本站技术基于Yshop商城框架系统';

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
