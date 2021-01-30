<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class ShortenController extends Controller
{
    public function store(Request $request)
    {
        $link = new Link();
        $link->url = $request->input('url') ?? '';
        $link->code = Link::encode();
        $link->user_id = $request->user()->id;

        $link->save();

        return response()->json([
            'short_url' => $link->getShortUrl(),
        ]);
    }
}
