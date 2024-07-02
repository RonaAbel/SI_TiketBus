<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function halamankelas()
    {
        $dtKelas = Kelas::paginate(5);
        return view('Kelas.Data-kelas', compact('dtKelas'));
    }

    public function Cetak()
    {
        $dtCetak = Kelas::all();
        return view('Kelas.Cetak-kelas', compact('dtCetak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kelas.Create-kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Kelas::create([
            'Nama_Kelas'=> $request->Nama_Kelas,
            'Fasilitas'=> $request->Fasilitas,
        ]);

        return redirect('Data-kelas')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Kelas::findorfail($id);
        return view('Kelas.Edit-kelas', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt = Kelas::findorfail($id);
        $dt->update($request->all());
        return redirect('Data-kelas')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dt = Kelas::findorfail($id);
        $dt->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
