<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "companies" => Company::count(),
            "employees" => Employee::count()
        ];

        return view('home')->with(compact('data'));
    }
}
