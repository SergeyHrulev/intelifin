<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Budget\Payment;
use App\Budget\Department;

class BudgetReportController extends Controller
{

    public function index(){
        $data = Payment::with('department')->get();
        return $data;
    }

    public function showDepartmentsReport(Payment $payment, Request $request){

            $id = json_decode($request->input('key'));

            $data = Payment::with('department')->where('department_id', $id)->get();
            return $data;
    }

    public function budget(Payment $payment){
        $data = $payment->with( 'barticles.section', 'department', 'paymentType')->get();
        dd($data);
        return $data;
    }
}
