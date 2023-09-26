<?php

namespace App\Http\Controllers;

use App\Actions\UrlShortner\UniqueString;
use App\Http\Requests\StoreUrlRequest;
use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function goLink($code)
    {
        $link = Url::where('short_link',$code)->where('active', true)
                                              ->first();
        if($link){
            $link->views = $link->views + 1;
            $link->save();
            return redirect()->away($link->original_url);
        }else{
            abort(404);
        }
    }


    public function createLink(StoreUrlRequest $request)
    {
        $short_link = (new UniqueString())->generate();
        $url = Url::create([
              'short_link' => $short_link,
              'original_url' => $request->url
        ]);

        return response()->json([
            "success" => (bool) $url,
            "data" => [
                "link" => $url ? "http://localhost:8000/go/". $url->short_link : "",
                "url" => $request->url
            ]
        ]);
    }
}
