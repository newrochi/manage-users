@extends('panel.main')
@section('panel')
<div class="card">
    <div class="card-header">
        Edit Role
    </div>
    <div class="card-body">
        
    <form method="post" action="{{route('roles.update' , $role->id)}}">
            @csrf
            <div class="form-row">
                <div class="col">
                <input type="text" name="name" class="form-control" value="{{$role->name}}" placeholder="Role Name">
                    @if($errors->has('name'))
                    <small class="form-text text-danger"> {{$errors->first('name')}} </small>
                    @endif
                </div>
                {{-- <div class="col">
                <input type="text" name="persian_name" class="form-control"  value="{{$role->persian_name}}" placeholder=" @lang('users.role persian name') ">
							@if($errors->has('persian_name'))
							<small class=" form-text text-danger"> {{$errors->first('persian_name')}} </small>
                    @endif
                </div> --}}
            </div>
            <div class="form-group mt-5">
                <span>
                    Add Permission to Role
                </span>
                <hr>
            </div>
            <div class="form-group">
        @forelse ($permissions as $permission)
        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" name='permissions[]' {{$role->permissions->contains($permission) ? 'checked' : ''}} value="{{$permission->name}}" class="custom-control-input" id="{{'permission' . $permission->id}}">
        <label class="custom-control-label" for="{{'permission' . $permission->id}}">{{$permission->name}}</label>
        </div>
        @empty
           <p>
               There are no permissions for this role.
               </p>
        @endforelse
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
