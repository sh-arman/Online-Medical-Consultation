<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function privacy()
    {
        return view('page.privacy');
    }

    public function search()
    {
        return view('page.search');
    }

    public function terms()
    {
        return view('page.terms');
    }
}
