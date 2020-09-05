<?php

namespace App\Http\Controllers;

use App\Budjet;
use Illuminate\Http\Request;
use App\Http\Requests\BudgetRequest;
use App\Http\Requests\UpdateBudgetRequest;

class BudjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Budjet $budjet)
    {        

        $budjet = Budjet::orderBy('date','desc')->paginate(10);

        //$user_productos = User::with('productos')->where('name', $name)->get();

       $entry_budget =Budjet::where('budget_type','Ingreso')->sum('amount');       
       $exit_budget =Budjet::where('budget_type','Egreso')->sum('amount');
       
       $balance_budget = $entry_budget - $exit_budget;      
                
           
        
         return view('theme.backoffice.pages.budjet.index',[
             'budjets' => $budjet,
             'balance_budgets'=> $balance_budget
             ]);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.backoffice.pages.budjet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BudgetRequest $request , Budjet $budjet)
    {
        ///($request);
        $budjet = $budjet->store($request);      

         //return view('theme.backoffice.pages.budjet.create');
         return redirect()->route('backoffice.budjet.index',$budjet);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budjet  $budjet
     * @return \Illuminate\Http\Response
     */
    public function show(Budjet $budjet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budjet  $budjet
     * @return \Illuminate\Http\Response
     */
    public function edit(Budjet $budjet)
    {
        return view('theme.backoffice.pages.budjet.edit',[
            'budjet' => $budjet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budjet  $budjet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetRequest $request, Budjet $budjet)
    {
         dd($budjet->my_update($request));
        
       return redirect()->route('backoffice.budjet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budjet  $budjet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budjet $budjet)
    {
        //
    }
}
