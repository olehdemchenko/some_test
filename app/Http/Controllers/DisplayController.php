<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisplayRequest;
use App\Models\Display;
use App\Models\Reseller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
    {
        $displays = Display::all()->toJson();

        return view('display.index', compact('displays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = (new Display)->types;
        $resellers = Reseller::all();

        return view('display.create', compact('types', 'resellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(DisplayRequest $request)
    {
        $display = Display::create($request->all());

        return redirect()->route('displays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Display  $display
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $display)
    {
        return response()->json($display);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function destroy(Display $display)
    {
        $display->delete();
    }
}
