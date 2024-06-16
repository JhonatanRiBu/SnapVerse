<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SnapController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $url = env('URL_SNAP_API', 'http://127.0.0.1');
        if(empty($search)){
            $response = Http::get($url . '/characters');
        }else{
            $response = Http::get($url . '/characters/search/' . $request->search);
        }
        $characters = $response->json();

        return view('snap.index',compact('characters'));
    }
}

