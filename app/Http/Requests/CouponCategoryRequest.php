<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $id = $this->route('category');
        return [
            'name' => 'required|string|max:100|unique:coupon_categories,name,'.$id,
            'status' => 'required|in:I,A',
        ];
    }
}
