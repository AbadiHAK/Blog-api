<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{
    use HasFactory;
    public static function countActiveBlogs(){
        $data=BlogPost::count();
        if($data){
            return $data;
        }
        return 0;
    }

    public function category(){
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
