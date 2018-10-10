@extends('layouts.master')

@section('title', 'Manajemen Tugas Kuliah')

@section('content')
<a href="/tugas" title="Back"><button class="w3-button w3-red w3-round"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>
<br>
<br>
	<form class="w3-container w3-card-2">
	    <h4><strong>Lihat Tugas Kuliah</h4></strong>
	    <hr>

	        <label>Nama Mata Kuliah</label>
	        <input  type="text" class="w3-input w3-border w3-round" name="nama_matkul" value="{{ $tugas->nama_matkul }}" disabled>
	    <p>
	        <label>Judul Tugas</label>
	        <input type="text" class="w3-input w3-border w3-round" name="judul_tugas" value="{{ $tugas->judul_tugas }}" disabled>
	    </p>
	    <p>
	        <label>Deadline</label>
	        <input type="text" class="w3-input w3-border w3-round" name="deadline" value="{{ $tugas->deadline }}" disabled>
		</p>
		<p>
	        <label>Status</label>

			<?php if ($tugas->status == 'Belum'): ?>
				<input type="text" class="w3-input w3-border w3-round w3-deep-orange" name="status" value="{{ $tugas->status }}" disabled>
			<?php else: ?>
				<input type="text" class="w3-input w3-border w3-round w3-green" name="status" value="{{ $tugas->status }}" disabled>
			<?php endif ?>

		</p>
		<hr>
	</form>

@endsection
