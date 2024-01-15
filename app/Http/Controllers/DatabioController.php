<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDatabioRequest;
use App\Http\Requests\UpdateDatabioRequest;
use App\Models\Databio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabioController extends Controller
{
    public function index(Request $request)
    {
        $databios = DB::table('databios')
            ->when($request->input('jumlah_sd'), function ($query, $jumlah_sd) {
                return $query->where('jumlah_sd', 'like', '%' . $jumlah_sd . '%');
            })
            ->select('id', 'jumlah_sd', 'jumlah_smp', 'jumlah_sma', 'jumlah_kuliah', 'pdam', 'pln', 'rumah', 'daya_pln', 'beasiswa')
            ->orderBy('id', 'asc')
            ->paginate(15);
            return view('pages.databios.index', compact('databios'));

    }

    public function create()
    {
        return view('pages.databios.create');
    }

    public function store(StoreDatabioRequest $request)
    {

        Databio::create([
            'jumlah_sd' => $request['jumlah_sd'],
            'jumlah_smp' => $request['jumlah_smp'],
            'jumlah_sma' => $request['jumlah_sma'],
            'jumlah_kuliah' => $request['jumlah_kuliah'],
            'pdam' => $request['pdam'],
            'pln' => $request['pln'],
            'rumah' => $request['rumah'],
            'daya_pln' => $request['daya_pln'],
            'beasiswa' => $request['beasiswa'],
        ]);

        return redirect(route('databio.index'))->with('success', 'Create New Biodata Successfully');
    }

    public function edit(Databio $databio)
    {
        return view('pages.databios.edit')->with('databio', $databio);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateDatabioRequest $request, Databio $databio)
    {
        $validate = $request->validated();
        $databio->update($validate);
        return redirect()->route('databio.index')->with('success', 'Edit Biodata Successfully');
    }

    public function destroy(Databio $databio)
    {
        $databio->delete();
        return redirect(route('databio.index'))->with('success', 'Delete Biodata successfully');
    }
}
