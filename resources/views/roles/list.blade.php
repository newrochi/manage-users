@extends('panel.main')
@section('panel')
		<div class="card">
			<div class="card-header">
				Add Role
			</div>
			<div class="card-body">
                {{-- Put action back later --}}
			<form method="post" action="{{route('roles.store')}} ">
					@csrf
					<div class="row">
						<div class="col-md-10">
							<input type="text" name="name" class="form-control  " placeholder="Role Name">
							@if($errors->has('name'))
							<small class="form-text text-danger"> {{$errors->first('name')}} </small>
							@endif
						</div>
						{{-- <div class="col-md-5">
							<input type="text"  name="persian_name" class="form-control " placeholder=" @lang('users.role persian name') ">
							@if($errors->has('persian_name'))
							<small class="form-text text-danger"> {{$errors->first('persian_name')}} </small>
							@endif
						</div> --}}
						<div class="col-md-2">
							<button class="btn btn-primary btn-sm">
							    Add Role
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card mt-5">
			<div class="card-header">
				Show Roles
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Name</th>
							{{-- <th scope="col"> @lang('users.role persian name') </th> --}}
							<th scope="col">Operation</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($roles as $role)
						<tr>
							<td> {{$role->name}} </td>
							{{-- <td> {{$role->persian_name}} </td> --}}
                            {{-- Put roles.edit route back --}}
						<td> <a href="{{route('roles.edit' , $role->id)}}">Edit</a> </td>
						</tr>
						@empty
						<p>
                            There are no roles.
						</p>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
@endsection
