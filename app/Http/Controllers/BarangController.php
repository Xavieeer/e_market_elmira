<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\barang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PDOException;
use App\Models\Produk;
use App\Models\User;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('ok');
        $barang = barang::latest()->get();
        $user = User::pluck('name', 'id');
        $produk = Produk::pluck('nama_produk', 'id');
        return view('barang.index', compact('barang', 'produk', 'user'));
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
    public function store(StoreBarangRequest $request)
    {
        //error handing
        try {
            DB::beginTransaction();
            $validated = $request->validated();
            DB::table('barang')->insert($validated);
            

            DB::commit(); //nyimpan data ke database
            //untuk me-refresh ke halaman itu kembali untuk melihat hasil input
            return redirect('barang')->with('success', "input data berhasil");
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack(); //undo perubahan query/table
            dd('error');
            // dd($this->failResponse($error->getMessage()), $error->getCode());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, $produk)
    {
        try {
            DB::beginTransaction();
            $produk = barang::findOrFail($produk);
            $validate = $request->validated();
            $produk->update($validate);
            DB::commit();
            return redirect()->back()->with('success', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
      
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        try {
            $barang->delete();
            return redirect('barang')->with('success', 'Data berhasil dihapus!');
        }catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }
}
