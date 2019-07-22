@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
     <table class="table table-condensed">
        <thead>
           <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active Status</th>
            <th>Created At</th>
            <th>Updated At</th>

           </tr>
         </thead>
         <tbody>
             @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="50" width="50" src="{{$user->photo? $user->photo->file : 'http://via.placeholder.com/50'}}" alt=""></td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->is_active == 1 ? 'Active': 'Not active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                   @endforeach
               @endif
        </tbody>
     </table>

@stop