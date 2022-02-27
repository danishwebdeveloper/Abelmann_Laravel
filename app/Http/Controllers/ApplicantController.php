<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //      return $this->middleware('auth')->only(['index']);
    //  }

    public function index()
    {
        $applicants = Applicant::all();
        // die($applicants->location->name);
        return view('Admin.ApplicantsRecord', [
            'applicants' => $applicants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = [];
        if($request->hasFile('documents')){
            foreach($request->file('documents') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $lcoation =  'storage/imageupload';
                $file->move($lcoation, $name );
                $files[] = $name;
                // die($files);
            }
        }

        $applicant = new Applicant();
        $applicant->saluation = $request->saluation;
        $applicant->firstname = $request->firstname;
        $applicant->lastname = $request->lastname;
        $applicant->email = $request->email;
        $applicant->mobile = $request->cellphone;
        // For checkboxes
        // $applicant->documents =  $request->record;
        // For File Uplaods

        $applicant->documents = $files;
        $applicant->save();

        $request->session()->flash('status', "Succesfully updated");
        return view('Admin.create' , ['applicants' => $applicant]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
