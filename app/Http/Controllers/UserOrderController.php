<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class UserOrderController extends Controller
{
    public function index() : View
    {
        return view('users.home');
    }

    public function add_to_cart(Request $req)
    {
        if($req->isMethod('post') && $req->has(['count','hand-out','item-id']))
        {
            if($req->session()->has('user.cart'))
            {
                $req->session()->put('user.cart.'.$req->input('item-id'), $req->except(['item-id','_token']));
            }
            else
            {
                session(['user.cart' => []]); //Edit this and create and append an array.
                $req->session()->put('user.cart.'.$req->input('item-id'), $req->except(['item-id','_token']));
            }
            // session(['user.test' => 'Rasoul']);
            return $req->session()->all();
        }
        else
        {
            return response("Invalid Request. Check your order.",400);
        }
    }
    public function delete_from_cart(Request $req)
    {
        if($req->has('item-id'))
        {
            // dd('user.cart.'.$req->input('item-id'));
            if($req->session()->has('user.cart.'.$req->input('item-id')))
            {
                $req->session()->forget('user.cart.'.$req->input('item-id'));
                return $req->session()->all();
            }
            else
            {
                return response($req->input('item-id')." doesn't exists in your cart.",404);
            }
        }
        else
        {
            return response("Invalid Request. Check your order.",400);
        }
    }
}
