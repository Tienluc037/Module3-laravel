<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $authors = DB::table('authors')->get();
        return view("author.list", compact("authors"));
    }

    public function showFormCreate()
    {
        return view("author.create");
    }

    public function create(Request $request)
    {
        DB::table('authors')->insert([
            'name' => $request->name,
            'phone' => $request->phone
        ]);
        return redirect()->route("authors.index");
    }

    public function show($id)
    {
        $author = DB::table('authors')->where('id', '=', $id)->get()->first();
        return view("author.detail", compact("author"));
    }


}
