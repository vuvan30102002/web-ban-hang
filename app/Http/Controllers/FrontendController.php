<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\order;
use App\Models\product;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
class FrontendController extends Controller
{
    public function index(){
        $products = product::all();
        return view('home',[
            'products' => $products,
        ]);
    }
    public function show_product(Request $request){
        $product = product::find($request -> id);
        return view('product',[
            'product_detail' => $product,
        ]);
    }
    public function add_cart(Request $request){
        $product_id = $request -> product_id;
        $product_quantity = $request -> product_quantity;
        if(is_null(Session::get('cart'))){
            Session::put('cart',[
                $product_id => $product_quantity
            ]);
            return redirect('/cart');
        }else{
            $cart = Session::get('cart');
            if(Arr::exists($cart,$product_id)){ //kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
                $cart[$product_id] = $cart[$product_id] + $product_quantity;
                Session::put('cart',$cart);
                return redirect('/cart');
            }
            else{
                $cart[$product_id] =  $product_quantity;
                Session::put('cart',$cart);
                return redirect('/cart');
            }
        }
    }
    public function show_cart(Request $request){
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id', $product_id)-> get();
        return view('cart',[
            'products' => $products,
        ]);
    }
    public function delete_cart(Request $request){
        $cart = Session::get('cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        return redirect('/cart');
    }
    public function update_cart(Request $request){
        $cart = $request -> product_id;
        Session::put('cart',$cart);
        return redirect('/cart');
    }
    public function send_cart(Request $request){
        $token = Str::random(12);
        $order = new order;
        $order -> name = $request -> input('name');
        $order -> phone = $request -> input('phone');
        $order -> email = $request -> input('email');
        $order -> city = $request -> input('city');
        $order -> district = $request -> input('district');
        $order -> ward = $request -> input('ward');
        $order -> address = $request -> input('address');
        $order -> note = $request -> input('note');
        $order_detail = json_encode($request -> input('product_id'));
        $order -> order_detail = $order_detail;
        $order -> token =$token;
        $order -> save();
        $request->session()->forget('cart');
       // Session::flush('cart'); đều là xoá giỏ hàng cũ đi
        $mailInfor = $order->email;
        $mailName = $order->name;
      //  $mail = Mail::to($mailInfor)->send(new TestMail($mailName));
        Notification::send($order,new EmailNotification($order));
        return redirect('/order/confirm');

    }
    public function show_login(Request $request){
        return view('login');
    }
    public function check_login(Request $request){
        $email = $request -> input('email');
        $password = $request -> input('password');
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])){
            return redirect('admin');
        }else{
        return redirect()->back();
        }
    }
}
