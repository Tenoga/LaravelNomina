@extends('layouts.appLayout')
@section('content')
@hasanyrole('Admin|Vendedor')
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br><br><br>
        <div class="w-50 m-auto p-1 rounded">
            <div class="card teal lighten-3">
                <div class="card-content white-text">
                    @if($user->is_admin)
                    <h1 class="card-title fw-bold">Admin Information {{$user->id}}</h1>
                    @else
                    <h1 class="card-title fw-bold">Employee Information {{$user->id}}</h1>
                    @endif
                    <br>
                    <h5 class="col d-inline">Name:</h5>
                    <p class="col d-inline">{{$user->name}}</p>
                    <br><br>
                    <h5 class="col d-inline">Email:</h5>
                    <p class="col d-inline">{{$user->email}}</p>
                    <br><br>
                    <h5 class="col d-inline">Phone:</h5>
                    <p class="col d-inline">{{$user->phone}}</p>
                    <br><br>
                    <h5 class="col d-inline">Hours:</h5>
                    <p class="col d-inline">{{$user->hours}}</p>
                    <br><br>
                </div>
                
                <div class="card-action">
                    <a href="/users/{{$user->id}}/edit" class="waves-effect waves-light btn-success btn">Editar</a>
                    @role('Admin')
                    @if (Auth::user()->id != $user->id)
                        <a href="/users/{{$user->id}}/drop"
                            class="waves-effect waves-light btn right btn-danger">Borrar</a>
                    @endif
                    @endrole
                </div>
                <a href="/users" class="waves-effect waves-light btn btn-warning">Regresar</a>
            </div>

        </div>
    </div>
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