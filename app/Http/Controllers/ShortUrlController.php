<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ShortUrl::all();

        return view('shortUrl/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shortUrl/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $originalUrl = $request->input('original_url');

        $randomString = Str::random(5);

        $newShortUrl = [
            'URL'=>$originalUrl,
            'shortURL'=>$randomString,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        ShortUrl::insert($newShortUrl);

        redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $shortUrl, Request $request)
    {

        if(strpos($shortUrl, '+')){
            str_replace('+','',$shortUrl);

            $shortUrl = substr($shortUrl, 0, strlen($shortUrl) - 1);
            $item = ShortUrl::where('shortURL', $shortUrl)->first();

            $device = $request->header('User-Agent');

            $data = [
                'countClick' => $item->countClick,
                'device' => $device,
            ];

            return view('shortUrl/show', compact('data'));


        } else {
            $item = ShortUrl::where('shortURL', $shortUrl)->first();

            if ($item) {

                $device = Device::create([
                    'name' => $request->header('User-Agent'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $device->shortUrls()->attach($item);

                ShortUrl::where('shortURL', $shortUrl)->increment('countClick');
                return redirect()->away($item->URl);

            }
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
