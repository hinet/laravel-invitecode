# laravel-invitecode
Invit code extend package for laravel, generates invite code using user ID and decodes user ID according to the invite code. It supports custom defined invite code with fixed length  
基于Laravel的邀请码扩展包，使用用户ID生成邀请码，并可根据邀请码解码出用户ID，支持自定义邀请码固定长度。

## 安装

```
composer require hinet/laravel-invitecode
```

## 配置

```
php artisan vendor:publish --tag=invitecode
```

修改config/invitecode.php自定义你的配置  
```php

return   [
    'length' => 6, //邀请码长度
    'char' => '',//生成邀请码的字符(不包括0),默认a-zA-Z1-9
    'salt' => '',//加密KEY,默认使用APP_KEY
];
```

## 使用示例

```php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use InviteCode;
class DemoController extends Controller{
    public function index(){
        echo InviteCode::enCode(123);
        //print NDZ0kA
        //echo echo InviteCode::deCode('NDZ0kA');
        //print 123
    }
}
```
