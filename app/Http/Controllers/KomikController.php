<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komik;

class KomikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Komik::all();
        return view('komik.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komik.add');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Komik::where('no_user', 'like', "%" . $keyword . "%")->paginate();
        return view('komik.index', compact('rows'));
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
            'no_user' => 'bail|required|unique:tb_komik',
            'nama_user' => 'required'
        ],
        [
            'no_user.required' => 'NO wajib diisi',
            'nama_user.required' => 'Nama wajib diisi'
        ]);
        
            Komik::create([
            'no_user' => $request->no_user,
            'nama_user' => $request->nama_user,
            'nama_komik' => $request->nama_komik,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);
        
        return redirect('komik');
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

    public function lihat($id)
    {
        $row = Komik::findOrFail($id);
        return view('komik.lihat', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Komik::findOrFail($id);
        return view('komik.edit', compact('row'));
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
        $request->validate
        (['no_user' => 'bail|required|unique:tb_komik',
          'nama_user' => 'required'],

         ['no_user.required' => 'NO wajib diisi',
          'no_user.required' => 'Nama wajib diisi']);

        $row = Komik::findOrFail($id);
        $row->update
        (['no_user' => $request->no_user,
          'nama_user' => $request->nama_user,
          'nama_komik' => $request->nama_komik,
          'no_tlp' => $request->no_tlp,
          'alamat' => $request->alamat]);

        return redirect('komik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Komik::findOrFail($id);
        $row->delete();
        return redirect('komik');
    }
}
