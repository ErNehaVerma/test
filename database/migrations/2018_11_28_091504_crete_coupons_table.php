<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('coupon_code')->unique();
            $table->string('image4mobile')->default();
            $table->string('image4desktop')->default();
            $table->integer('category_id')->default(0);
            $table->string('slug')->default('');
            $table->string('description')->default('');
            $table->string('tags')->default('');
            $table->date('offer_start_date')->nullable();
            $table->date('offer_end_date')->nullable();
            $table->char('promotion_category',1)->default('E');
            $table->char('publish_now',1)->default('N');
            $table->char('is_brand',1)->default('N');
            $table->string('brand_logo')->default('');
            $table->string('status')->default('');
            $table->timestamp('created_date')->nullable();
            $table->timestamp('updated_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
