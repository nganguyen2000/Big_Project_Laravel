<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
     public function products(){
    	return $this->hasMany("App\Product","category_id","id");
    }
}
