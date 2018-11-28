<div class="col-md-3">
    <div class="form-group">
        <div class="col-md-4 col-md-offset-1">
            <label>Logo</label>
            <div class="col-md-2 btn"><img src="{{ url(isset($coupon) ? '/coupons/'. $coupon->brand_logo : 'dist/img/download.jpg') }}" id="logo-img" width="150px" /><br>
                <div></br>
                    {!! Form::file('brand_logo',array("class" => "form-control", "id"=>"logo")) !!}
                    @if ($errors->has('brand_logo'))
                        <span class="text-danger">
                            {{ $errors->first('brand_logo') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-1">
            <label>Image(Mobile)</label>
            <div class="col-md-2 btn"><img src="{{ url(isset($coupon) ? '/coupons/'. $coupon->image4mobile : 'dist/img/download.jpg') }}" id="image4mobile-img" width="150px" /><br>
                <div></br>
                    {!! Form::file('image4mobile',array("class" => "form-control", "id"=>"image4mobile")) !!}
                    @if ($errors->has('image4mobile'))
                        <span class="text-danger">
                            {{ $errors->first('image4mobile') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 col-md-offset-1">
            <label>Image(Desktop)</label>
            <div class="col-md-2 btn"><img src="{{ url(isset($coupon) ? '/coupons/'. $coupon->image4desktop : 'dist/img/download.jpg') }}" id="image4desktop-img" width="150px" /><br>
                <div></br>
                    {!! Form::file('image4desktop',array("class" => "form-control", "id"=>"image4desktop")) !!}
                    @if ($errors->has('image4desktop'))
                        <span class="text-danger">
                            {{ $errors->first('image4desktop') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-9">
    <div class="form-group">
        {!! Form::label('name','Name', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-4" >
            {!! Form::text('name',null,['class' => 'form-control']) !!}
            @if ($errors->has('name'))
                <span class="text-danger">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('coupon_code','Code', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-3">
            {!! Form::text('coupon_code',null,['class' => 'form-control']) !!}
            @if ($errors->has('coupon_code'))
                <span class="text-danger">
                    {{ $errors->first('coupon_code') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-4">
            {!! Form::select('category_id',getCategory(),null,['class' => 'form-control']) !!}
            @if ($errors->has('category_id'))
                <span class="text-danger">
                    {{ $errors->first('category_id') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('slug','Slug', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-6">
            {!! Form::text('slug',null,['class' => 'form-control']) !!}
            @if ($errors->has('slug'))
                <span class="text-danger">
                    {{ $errors->first('slug') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('description','Description', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-8">
            {!! Form::text('description',null,['class' => 'form-control']) !!}
            @if ($errors->has('description'))
                <span class="text-danger">
                    {{ $errors->first('description') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-8">
            {!! Form::text('tags',null,['class' => 'form-control']) !!}
            @if ($errors->has('tags'))
                <span class="text-danger">
                    {{ $errors->first('tags') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('offer_start_date','Start Date', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-4">
            {!! Form::date('offer_start_date',null,['class' => 'form-control']) !!}
            @if ($errors->has('offer_start_date'))
                <span class="text-danger">
                    {{ $errors->first('offer_start_date') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('offer_end_date','End Date', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-4">
            {!! Form::date('offer_end_date',null,['class' => 'form-control']) !!}
            @if ($errors->has('offer_end_date'))
                <span class="text-danger">
                    {{ $errors->first('offer_end_date') }}
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('promotion_category','Promotion', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-3">
            {!! Form::select('promotion_category',[''=>'Select','P'=>'Popular', 'E'=> 'Exclusive'],null, ['class' => 'form-control']) !!}
            @if ($errors->has('promotion_category'))
                <span class="text-danger">
                    {{ $errors->first('promotion_category') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('publish_now','Publish Now', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-2">
            {!! Form::select('publish_now',[''=>'Select','Y'=>'Yes', 'N'=> 'No'],null, ['class' => 'form-control']) !!}
            @if ($errors->has('publish_now'))
                <span class="text-danger">
                    {{ $errors->first('publish_now') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('is_brand','Is Brand', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-2">
            {!! Form::select('is_brand',[''=>'Select','Y'=>'Yes', 'N'=> 'No'],null, ['class' => 'form-control']) !!}
            @if ($errors->has('is_brand'))
                <span class="text-danger">
                    {{ $errors->first('is_brand') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('status','Status', ['class' => 'col-sm-2 control-label required']) !!}
        <div class="col-sm-3">
            {!! Form::text('status',null,['class' => 'form-control']) !!}
            @if ($errors->has('status'))
                <span class="text-danger">
                    {{ $errors->first('status') }}
                </span>
            @endif
        </div>
    </div>





