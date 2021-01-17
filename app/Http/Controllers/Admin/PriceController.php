<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Price;

class PriceController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Listar precios')->only('index');
        $this->middleware('can:Crear precio')->only('create', 'store');
        $this->middleware('can:Editar precio')->only('edit', 'update');
        $this->middleware('can:Eliminar precio')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();

        return view('admin.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:prices',
            'value' => 'required|numeric'
        ]);

        $price = Price::create($request->all());

        return redirect()->route('admin.prices.edit', compact('price'))->with('info', 'El precio se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'name' => 'required|unique:prices,name,' . $price->id,
            'value' => 'required|numeric'
        ]);

        $price->update($request->all());

        return redirect()->route('admin.prices.edit', compact('price'))->with('info', 'El precio se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('admin.prices.index')->with('info', 'El precio se eliminó con éxito');
    }
}
