<?php

namespace App\Http\Controllers;

use App\Id;
use Illuminate\Http\Request;

include_once'C:\xampp\htdocs\getBlock\app\Connections\curl\getBlock.php';

class IdsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'hash' => 'required|min:30|max:128',
        ]);

        $id = new Id();
        $id->hash = $request->input('hash');


        $id->save();

        return redirect('/show')->with('success', 'Checking');
    }
    public function show(Request $request)
    {
        $info = \App\Id::all();
        $blocks = getBlock($info->last()->hash);

        return view('show', compact('blocks'));
    }
    public function raw(Request $request)
    {
        $info = \App\Id::all();
        $blocks = getBlock($info->last()->hash);

        return view('raw', compact('blocks'));
    }

}
