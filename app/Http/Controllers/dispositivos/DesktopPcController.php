<?php

namespace App\Http\Controllers\dispositivos;

use App\Http\Controllers\Controller;
use App\Models\DesktopPc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DesktopPcRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DesktopPcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $desktopPcs = DesktopPc::paginate();

        return view('desktop-pc.index', compact('desktopPcs'))
            ->with('i', ($request->input('page', 1) - 1) * $desktopPcs->perPage());
    }
    
    public function search(Request $request): View
    {
        $query = $request->input('query');
        $desktopPcs = DesktopPc::query()
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('motherboard_model', 'LIKE', "%{$query}%")
                    ->orWhere('ram', 'LIKE', "%{$query}%")
                    ->orWhere('storage', 'LIKE', "%{$query}%")
                    ->orWhere('processor', 'LIKE', "%{$query}%");
            })
            ->paginate(10);

        return view('desktop-pc.index', compact('desktopPcs'))
            ->with('i', ($request->input('page', 1) - 1) * $desktopPcs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $desktopPc = new DesktopPc();

        return view('desktop-pc.create', compact('desktopPc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesktopPcRequest $request): RedirectResponse
    {
        DesktopPc::create($request->validated());

        return Redirect::route('desktop-pcs.index')
            ->with('success', 'DesktopPc created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $desktopPc = DesktopPc::find($id);

        return view('desktop-pc.show', compact('desktopPc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $desktopPc = DesktopPc::find($id);

        return view('desktop-pc.edit', compact('desktopPc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DesktopPcRequest $request, DesktopPc $desktopPc): RedirectResponse
    {
        $desktopPc->update($request->validated());

        return Redirect::route('desktop-pcs.index')
            ->with('success', 'DesktopPc updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DesktopPc::find($id)->delete();

        return Redirect::route('desktop-pcs.index')
            ->with('success', 'DesktopPc deleted successfully');
    }
}
