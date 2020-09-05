<?php

namespace App\Http\Controllers;

use App\Budjet;
use Illuminate\Http\Request;
use App\Http\Requests\BudgetRequest;

class BudjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Budjet $budjet)
    {
        /*return view('theme.backoffice.pages.budjet.index',[
            'budjets' => Budjet::all(),
        ])->paginate(10);*/

        $budjet = Budjet::orderBy('created_at','asc')->paginate(10);
        //select * from pots
         return view('theme.backoffice.pages.budjet.index',['budjets' => $budjet]);

         
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budjet  $budjet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budjet $budjet)
    {
        //
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
