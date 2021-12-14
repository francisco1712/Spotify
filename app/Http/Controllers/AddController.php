<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Models\Songs;
use Illuminate\Support\Facaces\Mail;
use Illuminate\Support\Facades\Mail as FacadesMail;

/* use Illuminate\Http\Request; */

class AddController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('add');
    }

    public function store()
    {
        /* return $request; */
        request()->validate([
            'name' => 'required',
            'song' => 'required',
            'link' => 'required'
        ], [
            'name.required' => __('I need a name'),
            'song.required' => __('I need a song')

        ]);

        //Mail::to('francisconavarroblanco@gmail.com')->send(new MessageReceived);
        
        Songs::create([
            'song' => request('song'),
            'name' => request('name'),
            'link' => request('link')
        ]);

        return redirect()->route('list');
    }

}
