<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Detail extends Model
{
    public function product(){
    	return $this->hasOne("App\Detail","id","product_id");
    }
}
