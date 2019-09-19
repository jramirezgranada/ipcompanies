<?php

namespace App\Http\Helpers;


use Intervention\Image\Facades\Image;

class ImageHelper
{
    /**
     * Get the request logo and make a resize base on env settings
     * @param $logo
     * @return string
     */
    public static function resizeCompanyLogo($logo)
    {
        $fileNameExt = $logo->getClientOriginalName();
        $filenameToStore = time() . '_' . $fileNameExt;

        $logo->storeAs('public/company_imgs', $filenameToStore);

        if (!file_exists(public_path('storage/company_imgs'))) {
            mkdir(public_path('storage/company_imgs'), 0755);
        }

        $img = Image::make(public_path('storage/company_imgs/' . $filenameToStore));
        $croppath = public_path('storage/company_imgs/' . $filenameToStore);

        $img->resize(env('LOGO_WIDTH'), env('LOGO_HEIGHT'));
        $img->save($croppath);

        $path = asset('storage/company_imgs/' . $filenameToStore);

        return $path;
    }
}