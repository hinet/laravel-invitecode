<?php
return   [
    'length' => 'png', //验证码长度
    'char' => '',//生成验证码的字符(不能包括0),默认a-zA-Z1-9
    'salt' => env('APP_KEY'),//加密KEY
];