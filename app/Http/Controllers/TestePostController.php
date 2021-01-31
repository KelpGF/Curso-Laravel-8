<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTestePost;
use App\Models\TestePost;
use Illuminate\Http\Request;

class TestePostController extends Controller
{
    public function index()
    {
        $postsTeste = TestePost::get();

        return view('admin.posts.teste', compact('postsTeste'));
    }

    /*===========================================================*/

    public function create() 
    {
        return view('admin.posts.testeCreate');
    }

    public function store(StoreUpdateTestePost $request) 
    {
        TestePost::create($request->all());

        return redirect()->route('teste-posts.index');
    }
}
