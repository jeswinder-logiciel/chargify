<?php namespace Jes\LogiChargify;
 
class Chargify
{
    public static function saySomething() {
        return config('chargify.message');
    }
}