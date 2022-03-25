<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // $zip = new ZipArchive;
        // if ($zip->open($request->file('file')) === TRUE) {
        //     $zip->extractTo(Storage::makeDirectory('upload'));
        //     $zip->close();
        //     echo 'ok';
        // } else {
        //     echo 'failed';
        // }
    }
}
