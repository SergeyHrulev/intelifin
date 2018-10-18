<?php

namespace App\Http\Controllers\Budget;

use App\Budget\StructuralUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StructuralUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(route('structural-unit.store'));
        $structuralUnits = StructuralUnit::all();
        return view('budget.structural_unit.add_structural_unit', [
            'structuralUnits' => $structuralUnits
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
        if (StructuralUnit::create($request->all())){
            return redirect()->route('structural-unit.create');
        } else {
            return abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget\StructuralUnit  $structuralUnit
     * @return \Illuminate\Http\Response
     */
    public function show(StructuralUnit $structuralUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget\StructuralUnit  $structuralUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(StructuralUnit $structuralUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget\StructuralUnit  $structuralUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StructuralUnit $structuralUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget\StructuralUnit  $structuralUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(StructuralUnit $structuralUnit)
    {
        //
    }
}
