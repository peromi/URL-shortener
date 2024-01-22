<?php

namespace App\Http\Controllers;

use App\Models\SiteUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = new SiteUrl();
        $url->short = Str::uuid();
        $url->main = $request->url;

        if($url->save()){
            return redirect()->back()->with(["success" => $url->id]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $url = SiteUrl::where("short", $id)->first();

        if($url == null){
            return redirect()->back();
        }

       return redirect($url->main);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteUrl $siteUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteUrl $siteUrl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteUrl $siteUrl)
    {
        //
    }
}
