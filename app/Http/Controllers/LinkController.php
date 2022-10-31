<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('link.index');
    }

    public function show(Link $link)
    {
        return view('link.show',compact('link'));
    }
}
