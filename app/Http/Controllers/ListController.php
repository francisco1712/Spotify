<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Songs;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $list = Songs::get();
        $embed = Songs::get('link');
        $inicio = substr($embed,10,26)."/embed";
        $fin = substr($embed,-53);
        $final = $inicio.$fin;
        return view('list', compact('list','final'));
    }


    public function destroy($id) {
        $list = DB::table('songs')->where('id',$id);
        $list->delete();
        return view('home', compact('list'));
    }
}
