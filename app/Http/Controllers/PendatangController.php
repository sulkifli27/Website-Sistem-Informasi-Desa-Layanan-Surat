<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendatangRequest;
use App\Pendatang;
use Illuminate\Http\Request;

class PendatangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pendatang = Pendatang::paginate(15);
        $cari = $request->get('keyword');
        if ($cari) {
            $pendatang = Pendatang::where('nik', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('pendatang.index', compact('pendatang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendatang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendatangRequest $request)
    {
        $pendatang =  new Pendatang;
        $pendatang->no_datang = $request->get('no_datang');
        $pendatang->tgl_datang = date('Y-m-d', strtotime($request->get('tgl_datang')));
        $pendatang->asal = $request->get('asal');
        $pendatang->nik = $request->get('nik');
        $pendatang->save();
        return redirect()->route('pendatangindex');
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
        $pendatang = Pendatang::FindOrFail($id);
        return view('pendatang.edit', compact('pendatang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendatangRequest $request, $id)
    {
        $pendatang = Pendatang::FindOrFail($id);
        $pendatang->tgl_datang = date('Y-m-d', strtotime($request->get('tgl_datang')));
        $pendatang->asal = $request->get('asal');
        $pendatang->save();
        return redirect()->route('pendatangindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendatang = Pendatang::FindOrFail($id);
        $pendatang->delete();
        return redirect()->route('pendatangindex');
    }
}
