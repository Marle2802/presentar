<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use Illuminate\Http\Request;

/**
 * Class CaracteristicaController
 * @package App\Http\Controllers
 */
class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = Caracteristica::paginate();

        return view('caracteristica.index', compact('caracteristicas'))
            ->with('i', (request()->input('page', 1) - 1) * $caracteristicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caracteristica = new Caracteristica();
        return view('caracteristica.create', compact('caracteristica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caracteristica::$rules);

        $caracteristica = Caracteristica::create($request->all());

        return redirect()->route('caracteristicas.index')
            ->with('success', 'Caracteristica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caracteristica = Caracteristica::find($id);

        return view('caracteristica.show', compact('caracteristica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caracteristica = Caracteristica::find($id);

        return view('caracteristica.edit', compact('caracteristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caracteristica $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristica $caracteristica)
    {
        request()->validate(Caracteristica::$rules);

        $caracteristica->update($request->all());

        return redirect()->route('caracteristicas.index')
            ->with('success', 'Caracteristica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caracteristica = Caracteristica::find($id)->delete();

        return redirect()->route('caracteristicas.index')
            ->with('success', 'Caracteristica deleted successfully');
    }
}
