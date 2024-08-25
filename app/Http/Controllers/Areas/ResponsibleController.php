<?php

namespace App\Http\Controllers\Areas;

use App\Http\Controllers\Controller;
use App\Models\Responsible;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ResponsibleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $responsibles = Responsible::paginate();

        return view('responsible.index', compact('responsibles'))
            ->with('i', ($request->input('page', 1) - 1) * $responsibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $responsible = new Responsible();

        return view('responsible.create', compact('responsible'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponsibleRequest $request): RedirectResponse
    {
        Responsible::create($request->validated());

        return Redirect::route('responsibles.index')
            ->with('success', 'Responsible created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $responsible = Responsible::find($id);

        return view('responsible.show', compact('responsible'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $responsible = Responsible::find($id);

        return view('responsible.edit', compact('responsible'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponsibleRequest $request, Responsible $responsible): RedirectResponse
    {
        $responsible->update($request->validated());

        return Redirect::route('responsibles.index')
            ->with('success', 'Responsible updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Responsible::find($id)->delete();

        return Redirect::route('responsibles.index')
            ->with('success', 'Responsible deleted successfully');
    }
}
