<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $tit = "Welcome to the Laravel Page!";
        return view('pages.index')->with('title', $tit);
    }

    public function about()
    {
        $title='This is about page!';
        return view('pages.about', compact('title'));
    }
    
    public function services()
    {
        $data = array(
            'title' => 'This is services pages!',
            'services' => ['Web development', 'Programming', 'SEO']
        );
    
        return view('pages.services')->with($data);
    }    
}
