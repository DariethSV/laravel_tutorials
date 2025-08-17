<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is a an about page ...';
        $viewData['author'] = 'Developed by: Darieth';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['email'] = 'darieth@prueba.com';
        $viewData['address'] = 'Calle 1 #2-3';
        $viewData['phoneNumber'] = '123456789';

        return view('home.contact')->with('viewData', $viewData);
    }
}
