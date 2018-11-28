<?php

namespace App;
use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = "coupons";
    protected $fillable = ['name','coupon_code','image4mobile','image4desktop','category_id','slug','description','tags',
        'offer_start_date','offer_end_date','promotion_category','publish_now','is_brand','brand_logo','status','created_date','updated_date'];
    public $timestamps = false;


    public function category(){
        return $this->belongsTo(CouponCategory::class, 'category_id', 'id');
    }
}
