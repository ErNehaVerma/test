<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:200',
            'coupon_code' => 'required|string|max:100',
            'image4mobile' => 'nullable|dimensions:min_width=100,min_height=100|mimes:jpg,jpeg,png',
            'image4desktop' => 'nullable|dimensions:min_width=100,min_height=100|mimes:jpg,jpeg,png',
            'brand_logo' => 'nullable|dimensions:min_width=70,min_height=70|mimes:jpg,jpeg,png',
            'category_id' => 'required|string|max:200',
            'slug' => 'required|string|max:200',
            'description' => 'required|string|max:200',
            'tags' => 'required|string|max:200',
            'offer_start_date' => 'required|date',
            'offer_end_date' => 'required|date',
            'promotion_category' => 'required|in:E,P',
            'publish_now' => 'required|in:Y,N',
            'is_brand' => 'required|in:Y,N',
            'status' => 'required|string|max:200',
        ];
    }
}
