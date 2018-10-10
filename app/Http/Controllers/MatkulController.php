<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        //insert biasa
        // $matkul = new Matkul;
        // $matkul->nama_matkul = 'Pendidikan Pancasila';
        // $matkul->dosen = 'Pak SOfyan';
        // $matkul->sks = 3;
        // $matkul->save();


        //insert mass assignment
        // Matkul::create([
        //     'nama_matkul' => 'Aljabar Linier',
        //     'dosen' => 'Pak Aim',
        //     'sks' => 3,
        // ]);


        //update
        // $matkul = Matkul::where('nama_matkul', 'Aljabar Linier')->first();
        // $matkul->nama_matkul = 'Matriks';
        // $matkul->save();


        //update mass assignment
        // Matkul::find(4)->update([
        //     'nama_matkul' => 'Pancasila',
        //     'dosen' => 'Pak Sofyan'
        // ]);


        //delete
        // $matkul = Matkul::find(4);
        // $matkul->delete();


        //delete kedua
        // Matkul::destroy(5);

        //soft delete
        // $matkul = Matkul::find(2);
        // $matkul->delete();

        //return soft delete
        // Matkul::withTrashed()->restore();

        //pagination
        $matkuls = DB::table('matkuls')->paginate(10);
        // $matkuls = DB::table('matkuls')->simplePaginate(5);

        // $matkuls = Matkul::all();
        return view('matkul/home', ['matkuls' => $matkuls]);
    }

    //show 1 data
    public function show($id)
    {
        $matkul = Matkul::find($id);

        if(!$matkul)
            abort(404);

    	return view('matkul/single', ['matkul' => $matkul]);
    }

    //insert data
    public function create()
    {
        return view('matkul/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_matkul' => 'required|min:3',
            'dosen'       => 'required|min:5|max:20',
            'sks'         => 'required|numeric|max:6',
        ]);


        $matkul = new Matkul;
        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->dosen = $request->dosen;
        $matkul->sks = $request->sks;
        $matkul->save();

        return redirect('matkul');
    }

    //edit data
    public function edit($id)
    {
        $matkul = Matkul::find($id);

        if(!$matkul)
            abort(404);

        return view('matkul/edit', ['matkul' => $matkul]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_matkul' => 'required|min:3',
            'dosen'       => 'required|min:5|max:20',
            'sks'         => 'required|numeric|max:6',
        ]);
        
        // update mass assignment
        $matkul = Matkul::find($id);
        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->dosen = $request->dosen;
        $matkul->sks = $request->sks;
        $matkul->save();

        return redirect('matkul/' . $id);
    }

    public function destroy($id)
    {
        
        $matkul = Matkul::find($id);
        $matkul->delete();

        return redirect('matkul');
    }
}
