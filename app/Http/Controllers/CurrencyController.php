<?php

namespace App\Http\Controllers;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{

 /**
     * Afficher le tableau des devises.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $currencies = Currency::all();
        return view('currencies.index', compact('currencies'));
    }

    /**
     * Stocker une nouvelle devise.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:currencies,name',
            'iso_code' => 'required|string',
            'exchange_rate' => 'required|numeric',
            'decimals' => 'required|integer',
            'status' => 'required|in:active,inactive',
            'symbol' => 'required|string',
        ]);

        Currency::create([
            'name' => $request->name,
            'iso_code' => $request->iso_code,
            'exchange_rate' => $request->exchange_rate,
            'decimals' => $request->decimals,
            'status' => $request->status,
            'symbol' => $request->symbol,
        ]);

        return redirect()->route('currencies.index')->with('success', 'La devise a été ajoutée avec succès.');
    }


    /**
     * Supprimer une devise.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect()->route('currencies.index')->with('success', 'La devise a été supprimée avec succès.');
    }
    public function create()
    {
        $currencies = Currency::all();
        return view('currencies.create', compact('currencies'));
    }
}