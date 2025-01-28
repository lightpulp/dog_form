<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogController extends Controller
{
    public function produce_image(Request $request)
    {
        $breed = $request->input('breed'); // Get the breed from the request

        if ($breed) {
            $response = Http::get("https://dog.ceo/api/breed/{$breed}/images/random");
        } else {
            $response = Http::get('https://dog.ceo/api/breeds/image/random');
        }

        if ($response->successful()) {
            $image_url = $response->json()['message'];
            return response()->json(['image_url' => $image_url]);
        }

        return response()->json(['error' => "Cannot produce an image right now"], 500);
    }

    public function get_breeds()
    {
        $response = Http::get('https://dog.ceo/api/breeds/list/all');

        if ($response->successful()) {
            $breeds = $response->json()['message'];
            return response()->json(['breeds' => $breeds]);
        }

        return response()->json(['error' => "Cannot fetch breeds right now"], 500);
    }
}
    