@extends ('app')
    @section('content')
        <div class="box box-danger">
            <div class="box-header">
                <strong>New Coupon</strong>
                <div class="pull-right">
                    <a href="{{url('coupons')}}" class="btn btn-danger">
                        <i class="fa fa-users"> List</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-bordered">
                {!! Form::open(['url' => 'coupons' , 'class' => 'form-horizontal', 'files'=> 'true']) !!}
                @include('coupon._form')
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class = 'btn btn-danger btn-sm pull-right'> <i class="fa fa-save"></i>&nbsp Save</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @stop



