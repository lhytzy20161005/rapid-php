<?php
use rapidPHP\config\RouterConfig;

/**
 * 该文件由RapidPHP自动生成，生成时间：2020-04-23 12:52:35
 * 路由uri配置层一层外下匹配，直到匹配到停止
 * 正则或路径=>类，app.inc的对应类的元素名
 */
return [
[RouterConfig::URI_NAME=>'/^home(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\HomeController::class, RouterConfig::APP_NAME => 'hello'],[RouterConfig::URI_NAME=>'/^\/(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'root'],[RouterConfig::URI_NAME=>'/^index(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'index'],[RouterConfig::URI_NAME=>'/^home(|\/index)(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'home'],[RouterConfig::URI_NAME=>'/^user\/add.html$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'addUser'],[RouterConfig::URI_NAME=>'/^user\/info(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'getUserInfo'],[RouterConfig::URI_NAME=>'/^user\/info(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'getUserInfoPostMethod'],[RouterConfig::URI_NAME=>'/^user\/{$userId}(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'getUserInfoPath'],[RouterConfig::URI_NAME=>'/^user\/{$userId}\/cookie(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'getUserInfoCookie'],[RouterConfig::URI_NAME=>'/^upload(|\.html|\.php)$/i',RouterConfig::CLASS_NAME => \application\controller\BaseController::class, RouterConfig::APP_NAME => 'uploadFile'],
];