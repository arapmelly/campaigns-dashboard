<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use Illuminate\Http\Request;
use App\Services\CreativeService;
use App\Http\Requests\CreativeRequest;

class CreativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $creatives = Creative::paginate(5);
        return view('creatives.index', compact('creatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreativeRequest $request, CreativeService $service)
    {
        //
        $creative = $service->create($request);

        return redirect('creatives');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function show(Creative $creative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function edit(Creative $creative)
    {
        //
        return view('creatives.index', compact('creative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function update(CreativeRequest $request, Creative $creative)
    {
        //
        $creative = $service->update($request, $creative);

        return redirect('creatives');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreativeService $service, Creative $creative)
    {
        //
        $service->delete($creative);
    }
}
