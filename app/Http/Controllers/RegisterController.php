<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $registers = DB::table('registers')
            ->when($request->input('nama'), function ($query, $nama) {
                return $query->where('nama', 'like', '%' . $nama . '%');
            })
            ->select('id', 'nama', 'ktp', 'tanggal', 'agama', 'pendidikan', 'pekerjaan', 'pendapatan', 'penghasilan', 'status', 'alamat', 'no_hp', 'provinsi', 'kab', 'kec', 'kel')
            ->orderBy('id', 'asc')
            ->paginate(15);
            return view('pages.registers.index', compact('registers'));

    }

    public function create()
    {
        return view('pages.registers.create');
    }

    public function store(StoreRegisterRequest $request)
    {

        Register::create([
            'nama' => $request['nama'],
            'ktp' => $request['ktp'],
            'tanggal' => $request['tanggal'],
            'agama' => $request['agama'],
            'pendidikan' => $request['pendidikan'],
            'pekerjaan' => $request['pekerjaan'],
            'pendapatan' => $request['pendapatan'],
            'penghasilan' => $request['penghasilan'],
            'status' => $request['status'],
            'alamat' => $request['alamat'],
            'no_hp' => $request['no_hp'],
            'provinsi' => $request['provinsi'],
            'kab' => $request['kab'],
            'kec' => $request['kec'],
            'kel' => $request['kel'],
        ]);

        return redirect(route('register.index'))->with('success', 'Create New Register Successfully');
    }

    public function edit(Register $Register)
    {
        return view('pages.registers.edit')->with('register', $Register);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateRegisterRequest $request, Register $register)
    {
        $validate = $request->validated();
        $register->update($validate);
        return redirect()->route('register.index')->with('success', 'Edit Register Successfully');
    }

    public function destroy(Register $register)
    {
        $register->delete();
        return redirect(route('register.index'))->with('success', 'Delete Register successfully');
    }
}
