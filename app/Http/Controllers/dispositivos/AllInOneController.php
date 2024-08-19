<?php

namespace App\Http\Controllers\dispositivos;

use App\Http\Controllers\Controller;
use App\Models\AllInOne;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AllInOneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AllInOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $allInOnes = AllInOne::paginate();

        return view('all-in-one.index', compact('allInOnes'))
            ->with('i', ($request->input('page', 1) - 1) * $allInOnes->perPage());
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');
        $allInOnes = AllInOne::query()
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('model', 'LIKE', "%{$query}%")
                    ->orWhere('ram', 'LIKE', "%{$query}%")
                    ->orWhere('storage', 'LIKE', "%{$query}%")
                    ->orWhere('processor', 'LIKE', "%{$query}%");
            })
            ->paginate(10); // Puedes ajustar el número de resultados por página

        return view('all-in-one.index', compact('allInOnes'))
            ->with('i', ($request->input('page', 1) - 1) * $allInOnes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $allInOne = new AllInOne();

        return view('all-in-one.create', compact('allInOne'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllInOneRequest $request): RedirectResponse
    {
        AllInOne::create($request->validated());

        return Redirect::route('all-in-ones.index')
            ->with('success', 'AllInOne created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $allInOne = AllInOne::find($id);

        return view('all-in-one.show', compact('allInOne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $allInOne = AllInOne::find($id);

        return view('all-in-one.edit', compact('allInOne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AllInOneRequest $request, AllInOne $allInOne): RedirectResponse
    {
        $allInOne->update($request->validated());

        return Redirect::route('all-in-ones.index')
            ->with('success', 'AllInOne updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        AllInOne::find($id)->delete();

        return Redirect::route('all-in-ones.index')
            ->with('success', 'AllInOne deleted successfully');
    }
}
