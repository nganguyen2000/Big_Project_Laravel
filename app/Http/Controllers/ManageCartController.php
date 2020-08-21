<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use Illuminate\Support\Facades\Hash;

use App\Product;
use App\User;
use App\Cart;


class ManageCartController extends Controller
{
    
    function addToCart($id,Request $request){

    $product_id = $id;
    $quantity = $request->quantity;
    $user_id=$request->user_id;

    $key ="nga12345"; 
    $data = JWT::decode($user_id,$key, array('HS256'));
    $user_id = $data->user_id;

    $cart = Cart::where('product_id',$id)->first();
    if(!$cart){
    	$cart = new Cart;
    	$cart->product_id=$product_id;
    	$cart->quantity=$quantity;
    	$cart->user_id=$user_id;
    	$cart->save();
    }else if($cart->product_id==$product_id && $cart->user_id == $user_id){
    	$cart->quantity=$cart->quantity+1;
    	$cart->save();
    }

   }
   function showCart(Request $request){
        $token = request()->header('Authorization');
        $key ="nga12345"; 
        $data = JWT::decode($token, $key, array('HS256'));
        $user_id = $data->user_id;
      
        $carts= Cart::where('user_id', $user_id)->get();
        
        foreach($carts as $cart){
            $cart->products;  
        }
      //  return json_decode($carts);
        return json_encode($carts);
    }
}


 