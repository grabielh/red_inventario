<?php

namespace App\Http\Controllers\Areas;

use App\Http\Controllers\Controller;
use App\Models\DeviceType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DeviceTypeRequest;
use App\Models\AllInOne;
use App\Models\Connection;
use App\Models\DesktopPc;
use App\Models\Laptop;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DeviceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $deviceTypes = DeviceType::paginate();

        return view('device-type.index', compact('deviceTypes'))
            ->with('i', ($request->input('page', 1) - 1) * $deviceTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $deviceType = new DeviceType();
        $laptops = Laptop::all();
        
        $allInOnes = AllInOne::all();
        $desktopPcs = DesktopPc::all();

        $connection = Connection::all();


        $combined = $laptops->concat($allInOnes)->concat($desktopPcs);

        return view('device-type.create', compact('deviceType','combined','connection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeviceTypeRequest $request): RedirectResponse
    {
        DeviceType::create($request->validated());

        return Redirect::route('device-types.index')
            ->with('success', 'DeviceType created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $deviceType = DeviceType::find($id);
        
        return view('device-type.show', compact('deviceType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $deviceType = DeviceType::find($id);

        return view('device-type.edit', compact('deviceType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeviceTypeRequest $request, DeviceType $deviceType): RedirectResponse
    {
        $deviceType->update($request->validated());

        return Redirect::route('device-types.index')
            ->with('success', 'DeviceType updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DeviceType::find($id)->delete();

        return Redirect::route('device-types.index')
            ->with('success', 'DeviceType deleted successfully');
    }
}
