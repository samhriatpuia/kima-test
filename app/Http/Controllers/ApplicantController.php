<?php

namespace App\Http\Controllers;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        // dd("Success");
        $request->validate([
            'Name' => 'required',
            'Veng' => 'required',
            'Contact' => 'required',
            'Purpose'=>'required',
        ]);

        
        Applicant::create($request->all());

        return view('welcome');
    }

    public function index()
    {
        $applicants=Applicant::all();

        return view('applicant.all',compact('applicants'));
    }

}
