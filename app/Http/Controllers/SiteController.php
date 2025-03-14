<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();
        // dd("", $sites);
        return view("site.index",["sites"=> $sites]);
        // $sites = Site::all(['id', 'latitude', 'longitude', 'color']); // Fetch only required columns
        // return response()->json(['success' => true, 'sites' => $sites]);
    }


    public function marker()
    {
        $green = Site::where('color',"green")->count();
        $orange = Site::where('color',"orange")->count();
        $red = Site::where('color',"red")->count();
        $sites = Site::all();
        // dd("", $sites);
        return view('dashboard', compact('sites','green','red','orange')); // Pass markers to the view
        // $sites = Site::all(['id', 'latitude', 'longitude', 'color']); // Fetch only required columns
        // return response()->json(['success' => true, 'sites' => $sites]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("site.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'site' => ['required','string']
        ]);
        // $data['user_id'] = 1;
        $site = Site::create($data);

        return to_route('site.show', $site)->with('message','Site created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        return view('site.show',['site'=> $site]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        return view("site.edit", ["site"=> $site]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $data = $request->validate([
            'color' => ['required','string'],
            'client' => ['required','string'],
            'contact' => ['required','string']
        ]);
        // $data['user_id'] = 1;
        $site->update($data);
        // dd(''.$site);
        return to_route('site.marker', $site)->with('message','Site updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
