<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;
use  App\Applicant;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function createStep1(Request $request)
    {
        $applicant = $request->session()->get('applicant');
        return view('layouts.application-step1',compact('applicant', $applicant));
    }
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'fname' => 'required',
            'mname'=> 'required',
            'lname' => 'required',
            'nationality'=> 'required',
            'dob'=> 'required','kra_pin'=> 'required', 'gender'=> 'required','national_id'=> 'required', 'marital_status' => 'required','education'=> 'required', 'children'=> 'required', 'dependants'=> 'required',
            'next_kin'=> 'required', 'kin_relationship'=> 'required', 'kin_id' => 'required', 'kin_tel'=> 'required', 'county' => 'required','location'=> 'required',
            'road_street'=> 'required', 'house_no'=> 'required',
            'name_of_entity' => 'required',
            'year_of_reg'=> 'required',
            'reg_no'=> 'required',
            'licence_no'=> 'required',
            'name_of_bs'=> 'required',
            'pin'=> 'required',
            'bs_address' => 'required',
            'bs_tel'=> 'required',
            'bs_description'=> 'required',
            'employer' => 'required',
            'staff_no'=> 'required',
            'title'=> 'required',
            'department'=> 'required',
            'branch'=> 'required',
            'no_of_employees'=> 'required',
            'employement_terms' => 'required',
             'g_fname' => 'required',
            'g_mname'=> 'required',
            'g_lname' => 'required',
            'g_nationality'=> 'required',
            'g_dob'=> 'required','g_kra_pin'=> 'required', 'g_gender'=> 'required','g_national_id'=> 'required', 'g_marital_status' => 'required','g_education'=> 'required', 'g_occupation'=> 'required',
            'g_relationship'=> 'required', 'g_email' => 'required', 'g_tel'=> 'required', 'g_county' => 'required','g_location'=> 'required',
            'g_road_street'=> 'required'
        ]);

        if(empty($request->session()->get('applicant'))){
            $applicant = new Applicant();
            $applicant->applicant_id =Auth::user()->id;
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
            $applicant->save();
        }else{

            $applicant = new Applicant();
            $applicant->applicant_id =Auth::user()->id;
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
            $applicant->save();
        }

        return redirect('/myloans');

    }
    public function myloans()
    {
        $applicants = Loan::all()->where('applicant_id','LIKE',Auth::User()->id);
        return view('myloans',compact('applicants', $applicants));
    }
    public function createStep2(Request $request)
    {
        $applicant = $request->session()->get('applicant');
        return view('layouts.application-step2',compact('applicant', $applicant));
    }
    public function postCreateStep2(Request $request)
    {

        $validatedData = $request->validate([
            'name_of_entity' => 'required',
            'year_of_reg'=> 'required',
            'reg_no'=> 'required',
            'licence_no'=> 'required',
            'name_of_bs'=> 'required',
            'pin'=> 'required',
            'bs_address' => 'required',
            'bs_tel'=> 'required',
            'bs_description'=> 'required'
        ]);

        if(empty($request->session()->get('applicant'))){
            $applicant = new Applicant();
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
            $applicant->save();
        }else{
            $applicant = $request->session()->get('applicant');
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
            $applicant->save();
        }

        return redirect('/applicants/step3');

    }

    public function store(Request $request)
    {
        $product = $request->session()->get('applicant');
        $product->save();
        return redirect('/');
    }
}
