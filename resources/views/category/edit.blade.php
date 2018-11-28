@extends('app')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
        Update Coupon Category
    </div>
    <div class="box box-body">
        {!! Form::model($coupon_category, ['method' => 'PATCH', 'action' => ['CouponCategoryController@update', $coupon_category->id] , 'class' => 'form-horizontal']) !!}

        @include('category._form')
        <div class="box-footer">
            {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

