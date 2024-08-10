<?php

namespace sjaswinder82\MyPackage\Http\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return "view('mypackage::welcome')";
    }
}
