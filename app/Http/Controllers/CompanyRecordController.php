<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproject;
use App\Models\Firma;
use App\Models\Projekt;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class CompanyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Companyform');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validations
        $validator = Validator::make($request->all(),
        [
          'start'=> 'date',
          'end'=> 'date'
        ]
    );
         if($validator->fails()) {
         return Redirect::back()->withErrors($validator);
    }

            // Selected start and end Date
    $startdate = $request->input('project_start');
    $enddate = $request->input('project_end');

    // Query
    $data = Projekt::where('start', '<=', $startdate)
    ->where('end', '>=', $enddate)
    ->where(function($query){
            return $query->where('status', '=', 1);
        })->get();
    // dd($data);

    // Success/Failure Message
    if(count($data) != 0){
        $request->session()->flash('status', 'Results Found!');
    return view('displayRecord', compact('data'));
    }else{
        $request->session()->flash('failstatus', 'No Result Found!');
        return view('displayRecord', compact('data'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return var_dump($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
