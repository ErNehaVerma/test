<?php

namespace App\Http\Controllers;

use App\User;
use App\Coupon;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function index(){
        $coupons = Coupon::get()->load('category');
        return view('welcome', compact('coupons'));
    }

    public function showImage(){
        return response()->file(storage_path('/app/public/'.$name));

    }

}
