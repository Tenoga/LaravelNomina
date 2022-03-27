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
    public function show($id)
    {
        $userInfo=User::findOrFail($id);
        $hours = $userInfo->hours;
        $userCategory = $userInfo->category;

        $A = 25000;
        $B = 28000;
        $C = 30000; 
        //Employee example Category = C ; 120 Worked hours

        if($userCategory == "A"){
            $category = $A;
        }elseif($userCategory == "B"){
            $category = $B;
        }elseif($userCategory == "C"){
            $category = $C;
        }
        if($hours < 10){
            echo "<h1>The hours worked may not be less than 10</h1>";
            echo "
            <div>
                <a href='/users'>Back</a> 
            </div>";

        }elseif($hours > 120){
            echo "<h1>The hours worked may not be more than 120</h1>";
            echo "
            <div>
                <a href='/users'>Back</a> 
            </div>";
        }else{
            if($hours >= 90){
                $hCategory = $category;
                $total1 = 90 * $category; // 2'700.000
    
    
                $prDiff = $hours - 90; // 30
                $prExtra = $category * 0.10; // 30000 * 0.10 = 3.000
                $category = $category + $prExtra; // 30.000 + 3.000
                $total2 = $prDiff * $category; // 990.000
    
                $prTotal = $total1 + $total2; // 3'690.000
                if($hours >= 100){
                    $prTotal = $prTotal + 100000; // 3'690.000 + 100.000 = 3'790.000
                    $bonus = 100000;
                }else{
                    $bonus = 0;
                }
            }else{
                $prDiff = 0;
                $hCategory = $category;
                $bonus = 0;
                $prTotal = $hours * $category; 
            }
            return view('payroll.index', [
                'user'=>$userInfo, 
                'prTotal' =>$prTotal, 
                'prDiff' =>$prDiff, 
                'workHour' => $hCategory,
                'workedHours' => $hours,
                'extraHours' => $prDiff,
                'bonus' => $bonus,
                'total' => $prTotal
    
            ]);
        }
            
        

        
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