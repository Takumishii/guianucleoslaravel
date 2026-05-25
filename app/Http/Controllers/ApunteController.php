<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApunteRequest;
use App\Models\Apunte;
use App\Models\Nucleo;

class ApunteController extends Controller
{
    public function index()
    {
        $apuntes = Apunte::with('nucleo')->latest()->get();

        return view('apuntes.index', compact('apuntes'));
    }

    public function create()
    {
        $nucleos = Nucleo::all();

        return view('apuntes.create', compact('nucleos'));
    }

    public function store(StoreApunteRequest $request)
    {
        Apunte::create($request->validated());

        return redirect()
            ->route('apuntes.index')
            ->with('success', 'Apunte creado correctamente.');
    }

    public function show(Apunte $apunte)
    {
        $apunte->load('nucleo');

        return view('apuntes.show', compact('apunte'));
    }

    public function edit(Apunte $apunte)
    {
        $nucleos = Nucleo::all();

        return view('apuntes.edit', compact('apunte', 'nucleos'));
    }

    public function update(StoreApunteRequest $request, Apunte $apunte)
    {
        $apunte->update($request->validated());

        return redirect()
            ->route('apuntes.index')
            ->with('success', 'Apunte actualizado correctamente.');
    }

    public function destroy(Apunte $apunte)
    {
        $apunte->delete();

        return redirect()
            ->route('apuntes.index')
            ->with('success', 'Apunte eliminado correctamente.');
    }
}