<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadTestController extends Controller
{
    public function __invoke()
    {
        // fetch the requested file - simulated by confidential.txt

        // do the access right check, if not return 403 (forbidden)

        return response()->download( storage_path('app/private/confidential.txt') );
    }
}
