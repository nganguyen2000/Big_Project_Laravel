<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;

use App\Product;
use App\Detail;
use App\Category;

class productsController extends Controller
{
    function index(){
        $products = Product::all();
        // $categories = Category::all();
        // foreach ($products as $product){
        //     $product->category;
        //     $product->detail;
        // }
        return $products;
    }

    function store(Request $request){
        $name = $request->input('name');
        $username = $request->input('username');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $address = $request->input('address');
        $password = $request->input('password');

         $hashPassword = Hash::make($password);
        DB::table("users")->insert([
        'username' =>  $username,
        'name'=>$name,
        'password' => $hashPassword,
        'phoneNumber'=>$phoneNumber,
        'email'=>$email,
        'role'=>'user',
        'money'=>0,
        'address'=>$address
        ]);
        
       
   }
    function detail($id){
        $detailProduct = Product::where('id',$id)->get();
        $details      = Detail::all();
        foreach ($detailProduct as $detail){
            $detail->detail;
        }
        return json_encode($detailProduct);
    }
   function showCate(){
        $categories = Category::all();
        return $categories;
    }

 function addProduct(Request $request){
    

    $name = $request->name;
    $price = $request->price;
    $oldPrice = $request->oldPrice;
    $category_id = $request->category_id;
    $quantity = $request->quantity;
    $content = $request->content;
    $image = $request->image;

    $user_id=$request->user_id;
    $key ="nga12345"; 
    $data = JWT::decode($user_id,$key, array('HS256'));
    $user_id = $data->user_id;
     // echo $user_id;

    $product = new Product;
    $product->name =$name;
    $product->price =$price;
    $product->oldPrice=$oldPrice;
    $product->image =$image;
    $product->quantity =$quantity;
    $product->category_id =$category_id;
    $product->user_id=$user_id;
    $product->save();

    $Product_id = $product->id;

    $details = new Detail;
    $details->content=$content;
    $details->product_id=$Product_id;
    $details->save();

   }

   function showProducts(Request $request){
        $token = request()->header('Authorization');
        $key ="nga12345"; 
        $data = JWT::decode($token, $key, array('HS256'));
        $user_id = $data->user_id;
      
        $products= Product::where('user_id', $user_id)->get();
        // foreach ($products as $product){
        //     $product->category;
        //     $product->detail;
        // }
        return json_encode($products);
    }



    
}
