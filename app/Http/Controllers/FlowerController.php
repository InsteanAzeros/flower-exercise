<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = DB::table('flowers')->get();

        return view('all-flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = DB::table('flowers')->where('id', $id)->first();

        return view('flower-detail', ['flower' => $flower]);
    }

    public function create()
    {
        return view('new-flower');
    }

    public function insert(Request $request)
    {
        $result = DB::table('flowers')->insert([
            'name' => $request->name,
            'price' => $request->price
        ]);

        if ($result)
            return redirect('/flowers')->with('message', 'Successfully insert in the DB !');
        else
            echo "problem inserting";
    }
}
