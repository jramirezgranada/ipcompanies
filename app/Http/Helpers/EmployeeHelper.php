<?php

namespace App\Http\Helpers;

use App\Employee;

class EmployeeHelper
{
    /**
     * Store employee in DB
     * @param $data
     */
    public static function store($data)
    {
        Employee::create($data);
    }

    /**
     * Get employee detail
     * @param $id
     * @return Employee|Employee[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public static function get($id)
    {
        return Employee::with('company')->find($id);
    }

    /**
     * Update an existing employee
     * @param $data
     * @param $id
     */
    public static function update($data, $id)
    {
        Employee::updateOrCreate(
            ["id" => $id],
            $data->toArray()
        );
    }
}