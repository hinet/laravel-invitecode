<?php
namespace Hinet\InviteCode\Facades;

use Illuminate\Support\Facades\Facade;
class InviteCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InviteCode';
    }
}