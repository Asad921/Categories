<?php
namespace Categories\Facades;

use Illuminate\Support\Facades\Facade;
use Categories\Category;
use Auth;

class Cat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Categories';
    }
  
    
}