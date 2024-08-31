<?php

namespace App\Http\Controllers\Areas;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ConnectionRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $connections = Connection::paginate();

        return view('connection.index', compact('connections'))
            ->with('i', ($request->input('page', 1) - 1) * $connections->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $connection = new Connection();

        return view('connection.create', compact('connection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConnectionRequest $request): RedirectResponse
    {
        Connection::create($request->validated());

        return Redirect::route('connections.index')
            ->with('success', 'Connection created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $connection = Connection::find($id);

        return view('connection.show', compact('connection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $connection = Connection::find($id);

        return view('connection.edit', compact('connection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConnectionRequest $request, Connection $connection): RedirectResponse
    {
        $connection->update($request->validated());

        return Redirect::route('connections.index')
            ->with('success', 'Connection updated successfully');
    }

    // public function destroy($id): RedirectResponse
    // {
    //     Connection::find($id)->delete();

    //     return Redirect::route('connections.index')
    //         ->with('success', 'Connection deleted successfully');
    // }

    public function destroy($id): RedirectResponse
    {
        try {
            // Intentar eliminar el registro
            $connection = Connection::findOrFail($id);
            $connection->delete();

            // Redirigir con mensaje de éxito
            return Redirect::route('connections.index')
                ->with('success', 'Conexión eliminada exitosamente.');
        } catch (QueryException $e) {
            // Verificar el código de error para clave externa
            if ($e->getCode() == '23000') { // Código de error para restricción de clave externa
                return Redirect::route('connections.index')
                    ->with('error', 'No se puede eliminar la conexión porque hay datos asociados.');
            }

            // Manejar otros tipos de excepciones si es necesario
            return Redirect::route('connections.index')
                ->with('error', 'Ocurrió un error inesperado.');
        }
    }
}
