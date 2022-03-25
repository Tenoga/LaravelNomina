@extends('layouts.appLayout')
@section('content')
@hasanyrole('Admin|Vendedor')


<div class="mx-5">

    <h1 class="display-4 mb-4">Employee Detail</h1>
    <div class="d-inline">
        <a href="/">Home</a>
        /
        <a href="/users">EmployeeList</a>
        /
        <p class="d-inline">Employee Detail</p>
    </div>
    <div class="row my-3 light-blue lighten-3 z-depth-4 border-rounded p-4 my-5">
        <div class="col">
            <h3 class="col d-inline">Name:</h3>
            <h5 class="col d-inline text-secondary">{{$user->name}}</h5>
            <h3 class="col d-inline">Email:</h3>
            <h5 class="col d-inline text-secondary">{{$user->email}}</h5>
        </div>
        <div class="col">
            <h3 class="col d-inline">Phone:</h3>
            <h5 class="col d-inline text-secondary">{{$user->phone}}</h5>
            <h3 class="col d-inline">Category:</h3>
            <h5 class="col d-inline text-secondary">A</h5>
        </div>
    </div>
    <div class="row">
        <div class="col s6 mr-5">
            <div class="card-panel green lighten-1">
                <h1 class="text-right mr-4 text-white">{{$user->hours}}</h1>
                <h3 class="text-right mr-3 text-white">Hours</h3>
            </div>
        </div>
        <div class="col s6">
            <div class="card-panel orange lighten-2">
                <h1 class="text-right mr-4 text-white">Goal 100 Hours</h1>
                <h3 class="text-right mr-3 text-white">+ $100.000</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s6 mr-5">
            <div class="card-panel deep-purple lighten-2">
                <h1>
                    Graph1
                </h1>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 75%; ">{{$user->hours}}</div>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card-panel brown lighten-2">
                <h1>
                    Graph2
                </h1>
                <div class="progress">
                    <div class="determinate" style="width: 90%"></div>
                </div>
            </div>
        </div>
    </div>

    <td><a href="/payroll/{{$user->id}}" class="btn-small btn-success rounded-pill">Generate Payroll</a></td>

</div>
@else
@include(components.authAlert)
@endhasanyrole
@endsection