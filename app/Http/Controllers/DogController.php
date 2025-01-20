<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import the Http facade

class DogController extends Controller
{
    public function produce_image()
    {
        $response = Http::get('https://dog.ceo/api/breeds/image/random');

        if ($response->successful()) {
            $image_url = $response->json()['message'];
            return response()->json(['image_url' => $image_url]);
        }

        return response()->json(['error' => "Cannot produce an image right now"], 500);
    }
}