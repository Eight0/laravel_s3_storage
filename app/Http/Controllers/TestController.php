<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $name = '789.png';
        Storage::disk('s3')->putFileAs('test/1', $file, $name);
        $test = Storage::disk('s3')->url('test/1/'.$name);
//        $download = file_get_contents($test);
        $download= Storage::disk('s3')->get('test/1/'.$name);
        $headers = [
                'Content-Type' => 'application/png',
                'Content-Disposition' => 'attachment; filename='.$name.'',
        ];
//        dd($download);
        return response($download, 200, $headers);
    }
}
