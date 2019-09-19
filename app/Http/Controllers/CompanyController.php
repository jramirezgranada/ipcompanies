<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Helpers\CompanyHelper;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\EditCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.companies.index')->with(compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCompanyRequest $request
     * @return void
     */
    public function store(CreateCompanyRequest $request)
    {
        CompanyHelper::store($request);
        return redirect()->route('companies.index')->withSuccess(__('trans.record_added'));
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return response()->json($company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return void
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit')->with(compact(['company']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditCompanyRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCompanyRequest $request, $id)
    {
        CompanyHelper::update($request, $id);
        return redirect()->route('companies.index')->withSuccess(__('trans.record_added'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);

        return redirect()->route('companies.index')->withSuccess(__('trans.record_deleted'));
    }
}
