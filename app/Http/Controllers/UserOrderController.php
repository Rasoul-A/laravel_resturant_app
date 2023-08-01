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
        if($req->isMethod('post') && $req->has(['count','hand-out','item-name','item-price']))
        {

            session($req->all()); //Edit this and create and append an array.
            return $req->session()->all();
        }
    }
}
