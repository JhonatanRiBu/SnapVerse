<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SnapController extends Controller
{
    public function index()
    {
        $url = env('URL_SNAP_API','http://127.0.0.1');
        $response = Http::get($url.'/characters');
        $characters = $response->json();

        return view('snap.index',compact('characters'));
    }
}
