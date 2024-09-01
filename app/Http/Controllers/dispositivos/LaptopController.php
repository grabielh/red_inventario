<?php

namespace App\Http\Controllers\dispositivos;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LaptopRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $laptops = Laptop::paginate();

        return view('laptop.index', compact('laptops'))
            ->with('i', ($request->input('page', 1) - 1) * $laptops->perPage());
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');
        $laptops = Laptop::where('name', 'LIKE', "%{$query}%")
            ->orWhere('model', 'LIKE', "%{$query}%")
            ->orWhere('dimensions', 'LIKE', "%{$query}%")
            ->orWhere('processor', 'LIKE', "%{$query}%")
            ->orWhere('memory', 'LIKE', "%{$query}%")
            ->orWhere('storage', 'LIKE', "%{$query}%")
            ->orWhere('monitor', 'LIKE', "%{$query}%")
            ->orWhere('keyboard', 'LIKE', "%{$query}%")
            ->orWhere('connectors_slots', 'LIKE', "%{$query}%")
            ->orWhere('security_features', 'LIKE', "%{$query}%")
            ->orWhere('wireless_features', 'LIKE', "%{$query}%")
            ->paginate(10); // Puedes ajustar el número de resultados por página

        return view('laptop.index', compact('laptops'))
            ->with('i', ($request->input('page', 1) - 1) * $laptops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $laptop = new Laptop();

        return view('laptop.create', compact('laptop'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaptopRequest $request): RedirectResponse
    {
        Laptop::create($request->validated());

        return Redirect::route('laptops.index')
            ->with('success', 'Laptop created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $laptop = Laptop::find($id);

        return view('laptop.show', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $laptop = Laptop::find($id);

        return view('laptop.edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaptopRequest $request, Laptop $laptop): RedirectResponse
    {
        $laptop->update($request->validated());

        return Redirect::route('laptops.index')
            ->with('success', 'Laptop updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Laptop::find($id)->delete();

        return Redirect::route('laptops.index')
            ->with('success', 'Laptop deleted successfully');
    }
}
