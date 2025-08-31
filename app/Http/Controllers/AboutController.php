<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $files = File::files(public_path('assets/icons/tech/'));
        $max = count($files);
        return view('components.about', compact('max'));
    }
}
