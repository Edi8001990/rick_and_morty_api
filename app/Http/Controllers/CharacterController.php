<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;


class CharacterController extends Controller
{

    // Get characters list at the home.blade.php


   //  public function getCharactersList(){

   //    $response = Http::get('https://rickandmortyapi.com/api/character');
   //    $characters = $response->json()['results'];

   //    return view('home', ['characters' => $characters]);
   // }



   // Get characters list and pagination at the home.blade.php

   public function getCharactersList(Request $request){
       $page = $request->query('page', 1);
       $response = Http::get("https://rickandmortyapi.com/api/character", [
           'page' => $page,
       ]);
       
       $characters = $response->json()['results'];
       $totalCharacters = $response->json()['info']['count'];
   
       $paginatedCharacters = new LengthAwarePaginator(
           $characters,
           $totalCharacters,
           20, //  amount of characters representin the current array object
       );
   
       return view('home', ['characters' => $paginatedCharacters]);
   }
   


     // Get character details at the character-details.blade.php

     public function getCharacterDetails($id){

        $characterResponse = Http::get("https://rickandmortyapi.com/api/character/{$id}");
        $character = $characterResponse->json();

        return view('character-details', ['character' => $character]);
     
   }



}


