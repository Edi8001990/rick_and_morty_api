<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{


    public function getCharactersList(){

        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters = $response->json(['results']);

        return view('home', ['characters' => $characters]);
     }



     public function showCharacterUrl($id){

        $response = Http::get('https://rickandmortyapi.com/api/character/{$id}');
        $character = $response->json();
        
        return view('home', ['character' => $character]);

     }



}
