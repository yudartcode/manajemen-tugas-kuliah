@extends('layouts.master')

@section('title', 'Manajemen Mata Kuliah')

@section('content')
<a href="/matkul/" title="Back"><button class="w3-button w3-red w3-round"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>
<br>
<br>
	<form class="w3-container w3-card-2">
	    <h4><strong>Lihat Mata Kuliah</h4></strong>
	    <hr>

	        <label>Nama Mata Kuliah</label>
	        <input  type="text" class="w3-input w3-border w3-round" name="nama_matkul" value="{{ $matkul->nama_matkul }}" disabled>
	    <p>
	        <label>Dosen</label>
	        <input type="text" class="w3-input w3-border w3-round" name="dosen" value="{{ $matkul->dosen }}" disabled>
	    </p>
	    <p>
	        <label>SKS</label>
	        <input type="text" class="w3-input w3-border w3-round" name="sks" value="{{ $matkul->sks }}" disabled>
		</p>
		<hr>
	</form>

@endsection
