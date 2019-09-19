<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\Http\Helpers\EmployeeHelper;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.employees.index')->with(compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::pluck('name', 'id');

        if ($companies->count() === 0) {
            return redirect()->route('companies.create')->withErrors([__('trans.no_companies')]);
        }

        return view('admin.employees.create')->with(compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateEmployeeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        EmployeeHelper::store($request->except('_token'));
        return redirect()->route('employees.index')->withSuccess(__('trans.record_added'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(EmployeeHelper::get($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $companies = Company::pluck('name', 'id');

        return view('admin.employees.edit')->with(compact('companies', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditEmployeeRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditEmployeeRequest $request, $id)
    {
        EmployeeHelper::update($request, $id);
        return redirect()->route('employees.index')->withSuccess(__('trans.record_added'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect()->route('employees.index')->withSuccess(__('trans.record_deleted'));
    }
}
