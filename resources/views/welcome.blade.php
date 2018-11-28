@extends('layouts.app')

@section('content')
<div class="container">
<div class="card card-danger">
        <div class="card-header">
            <div class="float-left"><strong>List</strong></div>
            <div class="float-right">
            <form method="POST" action="{{url('filter')}}" method="POST">
                            @csrf

                        <div class="form-group row">
                            <div class="input-group">
                                <select name="cat_id" class="form-control" placeholder="Select Category To Filter">
                                    @foreach(getCategory() as $value=>$key)
                                    <option value="{{$value}}">{{$key}}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-info">GO</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <div class="card-body table-responsive">
            <table id="myTable" class="table table-bordered table-striped ">
                @foreach($coupons as $coupon)
                <div class="row">
                        <div class="col-md-7 offset-md-3">
                            <div class="card bg-default coupon">
                              <div class="card-header card-solid" id="head">
                                <div class="card-title" id="title">
                                        <img src="{{ url('/showimage/'. $coupon->brand_logo) }}" alt="coupon_image" height="50px" width="100px">
                                    <span class="hidden-xs"><h3>{{ $coupon->name }}</h3></span><br>
                                </div>
                              </div>
                              <div class="card-body">
                                <img src="{{ url('/showimage/'. $coupon->image4desktop) }}" alt="coupon_image" height="150px" width="100px" class="coupon-img img-rounded">
                                <div class="col-md-9">
                                        {{ $coupon->description }}
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="coupon-code">
                                    <span class="print">
                                    <h5>Code: <a class="btn btn-warning">

                                        <strong>{{ auth()->user() ? $coupon->coupon_code : '******' }}</strong></a></h5>
                                    </span>
                                </div>
                                <div class="exp">Expires: {{ $coupon->offer_end_date }}</div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
