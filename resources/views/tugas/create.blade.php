@extends('layouts.master')

@section('title', 'Manajemen Mata Kuliah')

@section('content')

<a href="/tugas/" title="Back"><button class="w3-button w3-red w3-round"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>
<br>
<br>
<form action="/tugas" method="post" class="w3-container w3-card-2">
	    <h4><strong>Tambah Data Tugas Kuliah</h4></strong>
	    <hr>

	        <label>Nama Mata Kuliah</label>
	        <input  type="text" class="w3-input w3-border w3-round" name="nama_matkul" value="{{ old('nama_matkul') }}" required>
	        <?php if ($errors->has('nama_matkul')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('nama_matkul') }}</strong>
				</p>
			<?php endif ?>
		<p>
			<label>Judul Tugas Kuliah</label>
	        <input  type="text" class="w3-input w3-border w3-round" name="judul_tugas" value="{{ old('judul_tugas') }}" required>
	        <?php if ($errors->has('judul_tugas')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('judul_tugas') }}</strong>
				</p>
			<?php endif ?>
		</p>
	    <p>
	        <label>Deadline</label>
	        <input type="date" class="w3-input w3-border w3-round" name="deadline" value="{{ old('deadline') }}" required>
	    </p>
	    	<?php if ($errors->has('deadline')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('deadline') }}</strong>
				</p>
			<?php endif ?>
	    <p>
	        <label>Status</label>
	        <br>
	        <input type="text" class="w3-input w3-border w3-round" name="status" value="{{ ('Belum') }}" required>
	        <?php if ($errors->has('status')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('status') }}</strong>
				</p>
			<?php endif ?>
		</p>

	    <input type="submit" name="submit" value="Create" class="w3-button w3-green w3-round">
		{{ csrf_field() }}
		<hr>
	</form>

@endsection
