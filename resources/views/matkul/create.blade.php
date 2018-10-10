@extends('layouts.master')

@section('title', 'Manajemen Mata Kuliah')

@section('content')

<a href="/matkul/" title="Back"><button class="w3-button w3-red w3-round"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>
<br>
<br>
<form action="/matkul" method="post" class="w3-container w3-card-2">
	    <h4><strong>Tambah Data Mata Kuliah</h4></strong>
	    <hr>

	        <label>Nama Mata Kuliah</label>
	        <input  type="text" class="w3-input w3-border w3-round" name="nama_matkul" value="{{ old('nama_matkul') }}" required>
	        <?php if ($errors->has('nama_matkul')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('nama_matkul') }}</strong>
				</p>
			<?php endif ?>
	    <p>
	        <label>Dosen</label>
	        <input type="text" class="w3-input w3-border w3-round" name="dosen" value="{{ old('dosen') }}" required>
	    </p>
	    	<?php if ($errors->has('dosen')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('dosen') }}</strong>
				</p>
			<?php endif ?>
	    <p>
	        <label>SKS</label>
	        <input type="text" class="w3-input w3-border w3-round" name="sks" value="{{ old('sks') }}" required>
		</p>
			<?php if ($errors->has('sks')): ?>
				<p>
					<i class="fa fa-close" style="color:red;"></i> <strong>{{ $errors->first('sks') }}</strong>
				</p>
			<?php endif ?>

	    <input type="submit" name="submit" value="Create" class="w3-button w3-green w3-round">
		{{ csrf_field() }}
		<hr>
	</form>

@endsection
