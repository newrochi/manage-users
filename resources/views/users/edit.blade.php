@extends('panel.main')
@section('panel')
{{-- Add link back here --}}
<form method="post" action="{{route('users.update' , $user->id)}} ">
    @csrf

    <div class="form-group ">
        <span>Add roles to user</span>
        <hr>
    </div>
    <div class="form-group">
        @forelse ($roles as $role)
        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" name='roles[]' {{$user->roles->contains($role) ? 'checked' : ''}} value="{{$role->name}}" class="custom-control-input" id="{{'role' . $role->id}}">
        <label class="custom-control-label" for="{{'role' . $role->id}}">{{$role->name}}</label>
        </div>
        @empty
           <p>
               There are no roles yet.
               </p>
        @endforelse
    </div>
    <div class="form-group mt-5">
        <span>Add permissions to user</span>
        <hr>
    </div>
    <div class="form-group">
        @forelse ($permissions as $permission)
        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" name='permissions[]' {{$user->permissions->contains($permission) ? 'checked' : ''}} value="{{$permission->name}}" class="custom-control-input" id="{{'permission' . $permission->id}}">
        <label class="custom-control-label" for="{{'permission' . $permission->id}}">{{$permission->name}}</label>
        </div>
        @empty
           <p>
               @lang('users.there are not any role')
               </p>
        @endforelse
    </div>
    <div class="form-group mt-5">
        <button class="btn btn-primary">Update Users</button>
    </div>
</form>
@endsection
