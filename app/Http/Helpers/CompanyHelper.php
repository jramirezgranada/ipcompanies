<?php

namespace App\Http\Helpers;

use App\Company;
use App\Mail\CompanyRegistered;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CompanyHelper
{
    /**
     * Store Company Data
     * @param $data
     */
    public static function store($data)
    {
        $data = $data->toArray();

        if (isset($data["logo"])) {
            $data["logo"] = ImageHelper::resizeCompanyLogo($data["logo"]);
        }

        $company = Company::create($data);

        try {
            Mail::to(auth()->user())->send(new CompanyRegistered($company));
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }


    }

    /**
     * Update exisitng company
     * @param $data
     * @param $id
     */
    public static function update($data, $id)
    {
        $data = $data->toArray();

        if (isset($data["logo"])) {
            $data["logo"] = ImageHelper::resizeCompanyLogo($data["logo"]);
        }

        Company::updateOrCreate(
            ["id" => $id],
            $data
        );
    }
}