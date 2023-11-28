<?php

namespace App\Http\Controllers;

use App\Models\Chrip;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        return view('chirps.index');
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
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chrip $chrip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chrip $chrip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chrip $chrip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chrip $chrip)
    {
        //
    }
}
