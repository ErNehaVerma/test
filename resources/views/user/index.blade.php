@extends ('app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        List of Users
    </div>
    <div class="panel-body">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
