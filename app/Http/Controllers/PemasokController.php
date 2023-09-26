<?php

namespace App\Http\Controllers;

use App\Models\pemasok;
use App\Http\Requests\StorepemasokRequest;
use App\Http\Requests\UpdatepemasokRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PDOException;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('ok');
        $pemasok= Pemasok::latest()->get();
        return view('pemasok.index', compact('pemasok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepemasokRequest $request)
    {
         //error handing
         try {
            DB::beginTransaction();
            $validated = $request->validated();
            DB::table('pemasoks')->insert($validated);
            

            DB::commit(); //nyimpan data ke database
            //untuk me-refresh ke halaman itu kembali untuk melihat hasil input
            return redirect('pemasok')->with('success', "input data berhasil");
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack(); //undo perubahan query/table
            dd('error');
            // dd($this->failResponse($error->getMessage()), $error->getCode());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemasok = Pemasok::find($id);
        return view('pemasok.edit')->with('pemasok', $pemasok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepemasokRequest $request, pemasok $pemasok)
    {
        try {
            DB::beginTransaction();
            $pemasok = Pemasok::findOrFail($pemasok);
            $validate = $request->validated();
            $pemasok->update($validate);
            DB::commit();
            return redirect()->back()->with('success', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemasok $pemasok)
    {
        try {
            $pemasok->delete();
            return redirect('pemasok')->with('success', 'Data berhasil dihapus!');
        }catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }
}
