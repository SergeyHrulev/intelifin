<?php

namespace App\Http\Controllers\Budget;

use App\Budget\Department;
use App\Budget\Payment;
use App\Budget\StructuralUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Payment $payment, $id = 0)
    {
        if ($id === 0){
            $data = Payment::with('department')->get();
            $departments = Department::all();
            return view('budget.reports.department', [
                'data' => $data,
                'departments' => $departments
            ]);
        }else{
            $data = Payment::with('departments')->where('departments_id', $id)->get();
            $departments = Department::all();
            return view('budget.reports.department', [
                'data' => $data,
                'departments' => $departments
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::with('structuralUnit')->get();
        $structuralUnit = StructuralUnit::all();
        return view('budget.department.add_department', [
            'departments' => $departments,
            'structuralUnits' => $structuralUnit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Department::create($request->all())){
            return redirect()->route('department.create');
        } else {
            return abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
