<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 调试模式开关
define("APP_DEBUG", false);

// 定义 APP 命名空间
define("APP_NAMESPACE", 'api');

// 定义CMF根目录,可更改此目录
define('CMF_ROOT', __DIR__ . '/../../');

// 定义应用目录
define('APP_PATH', CMF_ROOT . 'api/');

// 定义CMF目录
define('CMF_PATH', __DIR__ . '/../../system/cmf/');

// 定义插件目录
define('PLUGINS_PATH', __DIR__ . '/../plugins/');

// 定义扩展目录
define('EXTEND_PATH', __DIR__ . '/../../system/extend/');
define('VENDOR_PATH', __DIR__ . '/../../system/vendor/');

// 定义应用的运行时目录
define('RUNTIME_PATH',__DIR__.'/../../data/runtime/api/');

// 加载框架基础文件
require __DIR__ . '/../../system/thinkphp/base.php';

// 执行应用
\think\App::run()->send();
