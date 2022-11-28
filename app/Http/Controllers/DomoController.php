<?php

namespace App\Http\Controllers;

use App\Models\Domo;
use Illuminate\Http\Request;

/**
 * Class DomoController
 * @package App\Http\Controllers
 */
class DomoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domos = Domo::paginate();

        return view('domo.index', compact('domos'))
            ->with('i', (request()->input('page', 1) - 1) * $domos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domo = new Domo();
        return view('domo.create', compact('domo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Domo::$rules);

        $domo = Domo::create($request->all());

        return redirect()->route('domos.index')
            ->with('success', 'Domo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domo = Domo::find($id);

        return view('domo.show', compact('domo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domo = Domo::find($id);

        return view('domo.edit', compact('domo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Domo $domo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domo $domo)
    {
        request()->validate(Domo::$rules);

        $domo->update($request->all());

        return redirect()->route('domos.index')
            ->with('success', 'Domo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $domo = Domo::find($id)->delete();

        return redirect()->route('domos.index')
            ->with('success', 'Domo deleted successfully');
    }
}
