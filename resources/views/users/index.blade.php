@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Users List</h1>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Edit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $index=>$user)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    {{$role->display_name}}
                                @endforeach


                            </td>
                            <td><a href="{{route('users.edit' ,$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
