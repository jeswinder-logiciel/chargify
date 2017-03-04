<?php namespace Jes\LogiChargify\Facade;
 
use Illuminate\Support\Facades\Facade;
 
class Chargify extends Facade {
 
    protected static function getFacadeAccessor() { return 'chargify'; }
 
}