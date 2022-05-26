<?php
namespace Categories\Facades;

use Illuminate\Support\Facades\Facade;
use Categories\Category;
use Illuminate\Http\Request;
use Auth;

class Cat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Categories';
    }
    public function store(Request $request)
    {
        // requested fields add into an array
        $data = [
            "title"           => $request->title,
            "description"    =>  $request->description,
            "subcategory"    =>  $request->subcategory,
        ];

         $category = Category::create($data);

         if($request->hasfile('image')){
            Image::upload($request->image, categories, $category->id, Category::class);
        }
    }
  
    
}