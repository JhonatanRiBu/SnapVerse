<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SnapController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $cost = $request->cost;
        $serie = $request->serie;
        $power_order = $request->power_order;
        if($cost == 'Any'){
            $cost = '';
        }
        if ($serie == 'Any') {
            $serie = null;
        }else{
            if($serie == 1){
                $serie = 'starter-card';
            }
        }

        if ($power_order == 'Any') {
            $power_order = '';
        }

        $url = env('URL_SNAP_API', 'http://127.0.0.1');
        $response = Http::get($url . '/characters?name='.$name.'&cost='.$cost. '&serie=' . $serie.'&power_order='.$power_order);

        $characters = $response->json();
        $headers = $response->headers();

        return view('snap.index',compact('characters', 'headers'));
    }
}

