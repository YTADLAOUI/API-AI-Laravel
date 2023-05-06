<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ImageController extends Controller
{
    public function generate(Request $request){
        $request->validate([
            'description'=>'required|string|max:1000',
            'size'=> Rule::in('sm','md','lg'),
        ]);
// dd($request);
        $description=$request->description;
        switch ($request->size) {
            case 'lg':
                $size='1024x1024';
                break;
            case 'md':
                $size="512x512";
                break;
            default:
                $size='256x256';
                break;
        }
        //openAi
        $client =OpenAI::client(env('OPEN_AI_KEY'));

        $response = $client->images()->create([
            'prompt' => $description,
            'n' => 1,
            'size' => $size,
            'response_format' => 'url',
        ]);
        $url=$response->toArray()['data'][0]['url'];
    }
}
