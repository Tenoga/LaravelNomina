<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payroll;
use App\Http\Requests\StorePayrollRequest;
use App\Http\Requests\UpdatePayrollRequest;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payroll.index');
        // return view('payroll.index', ['payroll'=>Payroll::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayrollRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayrollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function show($hours)
    {
        $payrollHours = User::findOrFail($hours);
        $userCategory = 'C';
        $A = 25000;
        $B = 28000;
        $C = 30000;
        if($userCategory == "A"){
            $userCategory = $A;
        }elseif($userCategory == "B"){
            $userCategory = $B;
        }elseif($userCategory == "C"){
            $userCategory = $C;
        }
            
        if($hours > 90){
            $total1 = 90 * $userCategory; // 2'700.000
            $prDiff = $hours - 90; // 30
            $prExtra = $userCategory * 0.10; // 30000 * 0.10 = 3.000
            $userCategory = $userCategory + $prExtra; // 30.000 + 3.000
            $total2 = $prDiff * $userCategory; // 990.000

            $prTotal = $total1 + $total2; // 3'690.000
        }if($hours >= 100){
            $prTotal = $prTotal + 100000; // 3'690.000 + 100.000 = 3'790.000
        }
        else{
            $prTotal = $hours * $userCategory;
        }
        // return view('payroll.index', ['user'=>$payrollInfo]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayrollRequest  $request
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayrollRequest $request, Payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payroll $payroll)
    {
        //
    }
}