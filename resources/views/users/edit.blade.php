@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit User {{$user->naem}}</h1>
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" >
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="roles[]" value="super_admin" {{$user->hasRole('super_admin') ? 'checked' : ''}}>Super Admin
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="roles[]" value="user" {{$user->hasRole('user') ?'checked' : ''}}>User
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
