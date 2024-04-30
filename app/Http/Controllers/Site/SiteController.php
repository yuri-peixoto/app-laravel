<?php

namespace App\Http\Controllers\Site;

class SiteController
{
    public function index()
    {
        return view('site.index');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
