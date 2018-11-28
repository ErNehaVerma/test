@extends ('app')
@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            Add Coupon Categories
        </div>
        <div class="box-body">
            {!! Form::open(['url' => 'category' , 'class' => 'form-horizontal']) !!}
            @include('category._form')
        </div>
        <div class="box-footer">

            {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
