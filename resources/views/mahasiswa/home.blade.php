@extends('layouts.master')

@section('title', 'Manajemen Mahasiswa')

@section('content')

	<h2 class="page-header">Manajemen Mahasiswa</h2>
	<hr>
	<a href="/mahasiswa/create" title="Tambah"><button class="w3-button w3-green w3-round"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button></a>
	<br>
	<br>
	<!-- tabel -->
	<table class="w3-table-all">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Mahasiswa</th>
				<th>Jurusan</th>
				<th>Tindakan</th>
			</tr>
		</thead>
	@foreach ($mahasiswas as $mahasiswa)
		<tr>
			<td>{{ $mahasiswa->id }}</td>
			<td>{{ $mahasiswa->nama_mahasiswa }}</td>
			<td>{{ $mahasiswa->jurusan }}</td>
			
			<td>
				<a href="/mahasiswa/{{ $mahasiswa->id }}" title="Lihat"><button class="w3-button w3-blue w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" title="Edit"><button class="w3-button w3-orange w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            	<form action="/mahasiswa/{{ $mahasiswa->id }}" method="post" style="float: left;">
					<a href="" title="Hapus"><button class="w3-button w3-red w3-tiny w3-round"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></a>
					{{ csrf_field() }}

					<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>

	@endforeach
	</table>
	<br>
	<!-- pagination -->
	<div class="pagination">
		{{ $tugas->links() }}
	</div>
@endsection