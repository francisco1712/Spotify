<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class ModSongController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('modsong');
    }

    public function edit(Request $request)
    {
        $list = Songs::get();
        return view('modsong', [
            'request' => $request
        ]);
    }
}
