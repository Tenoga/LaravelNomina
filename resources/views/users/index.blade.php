@extends('layouts.appLayout')
@section('content')
@hasanyrole('Admin|Employee')
<div class="container listTable">
    <table class="table">
        <h1 class="display-3" style="text-align: center; padding-top: 15px;">Lista de Trabajadores</h1>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Hours</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    @foreach($users as $user)
                        <tr class="table-light">
                            <td >{{$user->id}}</td>
                            <td >{{$user->name}} </td>
                            <td >{{$user->email}} </td>
                            <td >{{$user->phone}} </td>
                            <td >{{$user->hours}} </td>
                            <td><a href="users/{{$user->id}}" class="btn-small btn-success">View User</a></td>
                        </tr>
                    @endforeach
                    <td>
                        <a href="#" class="btn btn-warning" style="border-radius: 13px;"><img src="https://img.icons8.com/ios/50/000000/pencil.png" width="25px" /></a>
                        <a href="#" class="btn btn-danger" style="border-radius: 13px;"><img src="https://img.icons8.com/ios/50/000000/delete--v1.png" width="25px" /></a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
@else
<br><br>
<div class="row center container w-50 m-auto">
    <div class="col s6 m6">
        <div class="card red lighten-2">
            <div class="card-content white-text">
                <span class="card-title">No estas autorizado para esta vista.</span>
            </div>
            <div class="card-action">
                <a href="/" class="waves-effect waves-light btn blue lighten-3">Regresar</a>
            </div>
        </div>
    </div>
</div>
@endhasanyrole
@endsection