<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VolunteerController extends Controller
{
    public function download()
    {
        $path = storage_path('downloads/AWOESO Volunteer Application Form.pdf');
        if (file_exists($path)) {
            return response()->download($path);
        }
    }
}
