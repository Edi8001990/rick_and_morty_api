<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAnimalsList(){
        $animals = ['dog', 'cat', 'parrot', 'cow', 'chicken'];
        return view('home', ['animals' => $animals]);
    }
}
