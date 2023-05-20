@extends('panel.main')
@section('panel')
<div class="card">
    <div class="card-header">
        @lang('users.list')
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td>
                        @foreach ($user->roles as $role)
                        <span class="badge badge-secondary"> {{$role->name}} </span>
                        @endforeach
                    </td>
                       {{-- 1- Put back link here --}}
                    <td> <a href="{{route('users.edit' , $user->id)}}"> edit </a> </td>
                </tr>
                @empty
                    <p>
                        There are no users currently.
                    </p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
