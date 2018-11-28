<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCouponCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('coupon_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->char('status',1)->default('I');
        });
    }


    public function down()
    {
        Schema::dropIfExists('coupon_categories');
    }
}
