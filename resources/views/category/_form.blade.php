<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-1 control-label required']) !!}
    <div class="col-sm-4">
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="text-danger">
                {{ $errors->first('name') }}
            </span>
        @endif
    </div>
    {!! Form::label('status', 'status', ['class' => 'col-sm-1 control-label required']) !!}
    <div class="col-sm-2">
        {!! Form::select('status',[''=>'Select','A'=>'Active', 'I'=> 'Inactive'],null, ['class' => 'form-control']) !!}
        @if ($errors->has('status'))
            <span class="text-danger">
                {{ $errors->first('status') }}
            </span>
        @endif
    </div>
</div>

