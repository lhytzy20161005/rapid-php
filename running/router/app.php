<?php
use rapidPHP\config\RouterConfig;

/**
 * 该文件由RapidPHP自动生成，生成时间：2020-04-23 12:52:35
 * 可以访问的类，接口，不声明则没权限访问
 */
return [
\application\controller\ExceptionController::class => [],\application\controller\HomeController::class => ['hello'=>[RouterConfig::METHOD_NAME => 'hello',RouterConfig::METHOD_PARAMETER => ['userModel'=>[RouterConfig::METHOD_PARAMETER_TYPE => \application\model\AppUserModel::class,],],],],\application\controller\BaseController::class => ['root'=>[RouterConfig::METHOD_NAME => 'root',],'index'=>[RouterConfig::METHOD_NAME => 'index',],'home'=>[RouterConfig::METHOD_NAME => 'home',],'addUser'=>[RouterConfig::METHOD_NAME => 'addUser',RouterConfig::METHOD_TYPE => 'GET',RouterConfig::METHOD_PARAMETER => ['model'=>[RouterConfig::METHOD_PARAMETER_TYPE => \application\model\AppUserModel::class,],],],'getUserInfo'=>[RouterConfig::METHOD_NAME => 'getUserInfo',RouterConfig::METHOD_PARAMETER => ['userId'=>[RouterConfig::METHOD_PARAMETER_TYPE => 'int',RouterConfig::METHOD_PARAMETER_REQUEST_DOTYPE => 'POST',],],],'getUserInfoPostMethod'=>[RouterConfig::METHOD_NAME => 'getUserInfoPostMethod',RouterConfig::METHOD_TYPE => 'POST',RouterConfig::METHOD_PARAMETER => ['userId'=>[RouterConfig::METHOD_PARAMETER_TYPE => 'int',],],],'getUserInfoPath'=>[RouterConfig::METHOD_NAME => 'getUserInfoPath',RouterConfig::METHOD_PARAMETER => ['userId'=>[RouterConfig::METHOD_PARAMETER_TYPE => 'int',RouterConfig::METHOD_PARAMETER_DEFAULT => 'i:1;',],],],'getUserInfoCookie'=>[RouterConfig::METHOD_NAME => 'getUserInfoCookie',RouterConfig::METHOD_PARAMETER => ['userId'=>[RouterConfig::METHOD_PARAMETER_TYPE => 'string',RouterConfig::METHOD_PARAMETER_REQUEST_DOTYPE => 'cookies',],],],'uploadFile'=>[RouterConfig::METHOD_NAME => 'uploadFile',RouterConfig::METHOD_PARAMETER => ['file'=>[RouterConfig::METHOD_PARAMETER_REQUEST_DOTYPE => 'FILE',],],],],
];