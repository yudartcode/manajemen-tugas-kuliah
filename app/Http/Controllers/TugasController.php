<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tugas;


class TugasController extends Controller
{
    public function index()
    {
        
        //pagination
        $tugas = DB::table('tugas')->paginate(5);
        // $matkuls = DB::table('matkuls')->simplePaginate(5);

        // $tugas = Tugas::all();
        return view('tugas/home', ['tugas' => $tugas]);
    }

    //show 1 data
    public function show($id)
    {
        $tugas = Tugas::find($id);

        if(!$tugas)
            abort(404);

    	return view('tugas/single', ['tugas' => $tugas]);
    }

    //insert data
    public function create()
    {
        return view('tugas/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_matkul' => 'required|min:3',
            'judul_tugas' => 'required|min:3',
            'deadline'    => 'required|date',
            'status'	  => 'required',
        ]);


        $tugas = new Tugas;
        $tugas->nama_matkul = $request->nama_matkul;
        $tugas->judul_tugas = $request->judul_tugas;
        $tugas->deadline = $request->deadline;
        $tugas->status = $request->status;
        $tugas->save();

        return redirect('tugas');
    }

    //edit data
    public function edit($id)
    {
        $tugas = Tugas::find($id);

        if(!$tugas)
            abort(404);

        return view('tugas/edit', ['tugas' => $tugas]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_matkul' => 'required|min:3',
            'judul_tugas' => 'required|min:3',
            'deadline'    => 'required|date',
            'status'      => 'required',
        ]);


        $tugas = new Tugas;
        $tugas->nama_matkul = $request->nama_matkul;
        $tugas->judul_tugas = $request->judul_tugas;
        $tugas->deadline = $request->deadline;
        $tugas->status = $request->status;
        $tugas->save();

        return redirect('tugas/' . $id);
    }

    public function destroy($id)
    {
        
        $tugas = Tugas::find($id);
        $tugas->delete();

        return redirect('tugas');
    }
}