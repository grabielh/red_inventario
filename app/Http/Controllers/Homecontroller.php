<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AllInOne;
use App\Models\DesktopPc;
use App\Models\Laptop;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $laptops = Laptop::all();
        $allInOnes = AllInOne::all();
        $desktopPcs = DesktopPc::all();

        $combined = $laptops->concat($allInOnes)->concat($desktopPcs);

        return view('dashboard', compact('combined'));
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');

        $laptops = Laptop::where('model', 'LIKE', "%{$query}%")
            ->orWhere('dimensions', 'LIKE', "%{$query}%")
            ->orWhere('processor', 'LIKE', "%{$query}%")
            ->orWhere('memory', 'LIKE', "%{$query}%")
            ->orWhere('storage', 'LIKE', "%{$query}%")
            ->orWhere('monitor', 'LIKE', "%{$query}%")
            ->orWhere('keyboard', 'LIKE', "%{$query}%")
            ->orWhere('connectors_slots', 'LIKE', "%{$query}%")
            ->orWhere('security_features', 'LIKE', "%{$query}%")
            ->orWhere('wireless_features', 'LIKE', "%{$query}%")
            ->get();

        $allInOnes = AllInOne::query()
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('model', 'LIKE', "%{$query}%")
                    ->orWhere('ram', 'LIKE', "%{$query}%")
                    ->orWhere('storage', 'LIKE', "%{$query}%")
                    ->orWhere('processor', 'LIKE', "%{$query}%");
            })
            ->get();

        $desktopPcs = DesktopPc::query()
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('motherboard_model', 'LIKE', "%{$query}%")
                    ->orWhere('ram', 'LIKE', "%{$query}%")
                    ->orWhere('storage', 'LIKE', "%{$query}%")
                    ->orWhere('processor', 'LIKE', "%{$query}%");
            })
            ->get();

        // Combinar todas las colecciones
        $combined = $laptops->concat($allInOnes)->concat($desktopPcs);

        return view('dashboard', compact('combined', 'query'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
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
