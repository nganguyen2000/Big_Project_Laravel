<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;
use App\Product;
use App\Detail;

class ManageProductController extends Controller
{
   function delete($id){
        Detail::where('product_id',$id)->delete();
        Product::find($id)->delete();
      //  DB:: table('products')->where('id','=',$id)->delete();
        return redirect()->route('admin.user.index'); 
    }
 }
