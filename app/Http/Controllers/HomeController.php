<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicant = Applicant::where('applicant_id','=',Auth::User()->id)->first();;
        if ($applicant != null){
            return redirect('/myloans');


        }else {
            return view('home',['applicant'=>$applicant]);

        }

    }
    public  function store(Request $request)
    {

    }
}
