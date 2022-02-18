# laravel-invitecode
Laravel invitation code expansion package generates invitation code using user ID and decodes user ID according to the invitation code. It supports user-defined invitation code with fixed length  
基于Laravel的邀请码扩展包，使用用户ID生成邀请码，并可根据邀请码解码出用户ID，支持自定义邀请码固定长度。

## 安装

```
composer require hinet/laravel-invitecode
```

## 配置

```
php artisan vendor:publish --tag=invitecode
```

修改config/invite.php自定义你的配置  
```php

return   [
    'length' => 'png', //验证码长度
    'char' => '',//生成验证码的字符(不能包括0),默认a-zA-Z1-9
    'salt' => '',//加密KEY,默认使用APP_KEY
];
```
