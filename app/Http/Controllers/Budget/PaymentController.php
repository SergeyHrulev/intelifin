<?php

namespace App\Http\Controllers\Budget;

use App\Budget\Article;
use App\Budget\Department;
use App\Budget\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Payment $payment)
    {
        $data = $payment->with( 'barticles.mainArticle.section', 'department.structuralUnit')->get();
        return view('budget.reports.budget', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $departments = Department::all();
        return view('budget.add_payment', [
            'articles' => $articles,
            'departments' => $departments
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
        if (Payment::create($request->all())){
            return redirect()->route('payment.create');
        } else {
            return abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
