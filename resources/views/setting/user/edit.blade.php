@extends('admin.layouts.apps')
@section('content')
@if(session('success'))
<div id="success-message" class="alert alert-success" style="margin-left:250px;">
    {{ session('success') }}
</div>
@endif

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Update User</h3>
    </div>


    <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
        @csrf
        @method('put')
        <div class="card-body" style="margin-left: 250px;">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    value="{{ old('name',$user->name) }}" placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email',$user->email) }}"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                    placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
             
                <div class="grid grid-cols-3 gap-4">
                  @foreach($roles as $role)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                  @if(count($user->roles->where('id',$role->id)))
                                      checked 
                                  @endif
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
               
            </div>



            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>

@endsection