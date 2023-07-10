<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{

    // Get characters list at the home.blade.php

    public function getCharactersList(){

        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters = $response->json()['results'];

        return view('home', ['characters' => $characters]);
     }



     // Get character details at the character-details.blade.php

     public function getCharacterDetails($id){

        $characterResponse = Http::get("https://rickandmortyapi.com/api/character/{$id}");
        $character = $characterResponse->json();

        return view('character-details', ['character' => $character]);
        
        
     }



}


