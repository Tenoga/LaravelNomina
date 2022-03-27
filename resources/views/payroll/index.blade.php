@extends('layouts.appLayout')
@section('content')
@role('Admin')
<h1 class="display-3" style="text-align: center; padding-top: 15px;">PayRoll</h1>
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
            <h3 class="col d-inline">Category: {{$user->category}}</h3>
            <h5 class="col d-inline text-secondary"> Work Hour: {{$workHour}}</h5>
        </div>
    </div>
    <table class="table">
        
        <thead>
            <tr>
                <th scope="col">Description</th>
                <th scope="col">Value</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
                <tr>    
                    <td>Worked Hours</td>
                    <td>{{$workedHours}}</td>
                    <td>{{$moneyEarned}}</td>
                </tr>
                <tr>    
                    <td>Extra Hours (more than 90)</td>
                    <td>{{$extraHours}}</td>
                    <td>{{$extraMoney}}</td>
                </tr>
                <tr>    
                    <td>Goal Bonus 100 Hours</td>
                    <td>
                        <?php
                            if($user->hours > 100){
                                echo "1";
                            }else{
                                echo "0";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($user->hours > 100){
                                echo "100000";
                            }else{
                                echo "0";
                            }
                        ?>
                    </td>
                </tr>
                <tr class="green lighten-2">
                    <td>Total</td>
                    <td></td>
                    <td>{{$total}}</td>
                </tr>
        </tbody>
    </table>
</div>
@else('components.authAlert')
@endrole
@endsection