@extends('layouts.appLayout')
@section('content')
@role('Admin')

<div class="container listTable">
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
    <table class="table">
        <h1 class="display-3" style="text-align: center; padding-top: 15px;">PayRoll</h1>
        <thead>
            <tr>
                <th scope="col">Description</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            {{$user-> id}}
                <tr>    
                    <th>Work Hour</th>
                    <td>{{$workHour}}</td>
                </tr>
                <tr>    
                    <td>Worked Hours</td>
                    <td>{{$workedHours}}</td>
                </tr>
                <tr>    
                    <td>Extra Hours</td>
                    <td>{{$extraHours}}</td>
                </tr>
                <tr>    
                    <td>Bonus</td>
                    <td>{{$bonus}}</td>
                </tr>
                <tr class="green lighten-2">
                    <td>Total</td>
                    <td>{{$total}}</td>
                </tr>
        </tbody>
    </table>
</div>
@else('components.authAlert')
@endrole
@endsection