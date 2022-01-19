<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static function countActiveCategory(){
        $data=Category::count();
        if($data){
            return $data;
        }
        return 0;
    }
}
