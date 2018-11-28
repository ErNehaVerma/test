@extends ('app')
@section('content')
<div class="box box-default">
    <div class="box-header">
        Coupon Categories
    </div>
    <div class="box-body">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr class="warning">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->status == 'A' ? 'Active': 'Inactive'}}</td>
                    <td>
                        <div class="col-md-12">
                            <a href="{{ url('/category/' . $category->id . '/edit') }}" class="btn btn-warning mb-2" style="margin-bottom:5px">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="{{ url('category' , $category->id ) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
