<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Requests\CouponRequest;
use App\User;


class CouponController extends Controller
{
    public function index()
    {
        $coupons = coupon::get()->load('category');
        return view('coupon.index', compact('coupons'));
    }

    public function create()
    {
        return view('coupon.create');
    }

    public function store(CouponRequest $request)
    {
        $this->saveForm($request);
        return redirect('coupons');
    }

    private function saveForm($request, $id=0)
    {
        $coupon = coupon::findOrNew($id);
        $coupon->fill($request->all());
        if($id == 0){
            $coupon->created_date = today();
        }
        $coupon->updated_date = today();
        if($request->has('image4mobile')){
            $file = $request->image4mobile;
            $destinationPath = storage_path().'/app/public/';
            $filename = $file->getClientOriginalName().'_'.$coupon->id.'_mobile';
            $file->move($destinationPath, $filename);
            $coupon->image4mobile = $filename;
        }
        if($request->has('image4desktop')){
            $file = $request->image4desktop;
            $destinationPath = storage_path().'/app/public';
            $filename = $file->getClientOriginalName().'_'.$coupon->id.'_desktop';
            $file->move($destinationPath, $filename);
            $coupon->image4desktop = $filename;
        }
        if($request->has('brand_logo')){
            $file = $request->brand_logo;
            $destinationPath = storage_path().'/app/public';
            $filename = $file->getClientOriginalName().'_'.$coupon->id.'_brand_logo';
            $file->move($destinationPath, $filename);
            $coupon->brand_logo = $filename;
        }
        $coupon->save();
    }

    public function show($image_name)
    {
        return response()->file(storage_path('/app/public/'.$image_name));
    }

    public function edit($id)
    {
        $coupon = coupon::findorFail($id);
        return view('coupon.edit', compact('coupon'));
    }

    public function update(CouponRequest $request, $id)
    {
        $this->saveForm($request,$id);
        return redirect('coupons');
    }

    public function destroy($id)
    {
        $coupon = coupon::find($id)->delete();
        return redirect()->back();
    }

    public function seeUsers(){
        $users = User::orderBy('id')->get();
        return view('user.index', compact('users'));
    }
}
