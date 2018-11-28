<?php

namespace App\Http\Controllers;

use App\CouponCategory;
use Illuminate\Http\Request;
use App\Http\Requests\CouponCategoryRequest;


class CouponCategoryController extends Controller
{
    public function index()
    {
        $categories = CouponCategory::orderBy('id')->get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CouponCategoryRequest $request)
    {
        $this->saveForm($request);
        return redirect('category');

    }

    private function saveForm($request, $id=0)
    {
        $coupon_category = CouponCategory::findOrNew($id);
        $coupon_category->fill($request->all());
        $coupon_category->save();
    }

    public function edit($id)
    {
        $coupon_category = CouponCategory::findorFail($id);
        return view('category.edit', compact('coupon_category'));
    }

    public function update(CouponCategoryRequest $request, $id)
    {
        $this->saveForm($request,$id);
        return redirect('category');
    }

    public function destroy($id)
    {
        $coupon_category = CouponCategory::find($id)->delete();
        return redirect()->back();
    }
}
