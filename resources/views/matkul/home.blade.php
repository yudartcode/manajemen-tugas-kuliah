@extends('layouts.master')

@section('title', 'Manajemen Mata Kuliah')

@section('content')

	<h2 class="page-header">Manajemen Mata Kuliah</h2>
	<hr>
	<a href="/matkul/create" title="Tambah"><button class="w3-button w3-green w3-round"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button></a>
	<br>
	<br>
	<!-- tabel -->
	<table class="w3-table-all">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Mata Kuliah</th>
				<th>Dosen</th>
				<th>SKS</th>
				<th>Tindakan</th>
			</tr>
		</thead>
	@foreach ($matkuls as $matkul)
		<tr>
			<td>{{ $matkul->id }}</td>
			<td>{{ $matkul->nama_matkul }}</td>
			<td>{{ $matkul->dosen }}</td>
			<td>{{ $matkul->sks }}</td>
			<td>
				<a href="/matkul/{{ $matkul->id }}" title="Lihat"><button class="w3-button w3-blue w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                <a href="/matkul/{{ $matkul->id }}/edit" title="Edit"><button class="w3-button w3-orange w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            	<form action="/matkul/{{ $matkul->id }}" method="post" style="float: left;">
					<a href="" title="Hapus"><button class="w3-button w3-red w3-tiny w3-round"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></a>
					{{ csrf_field() }}

					<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>

	<!-- <li>
		<a href="/matkul/{{ $matkul->id }}">{{ $matkul->nama_matkul }}</a>

		<form action="/matkul/{{ $matkul->id }}" method="post">
		<input type="submit" name="submit" value="delete">
		{{ csrf_field() }}

		<input type="hidden" name="_method" value="DELETE">
	</form>
	</li>	 -->
	@endforeach
	</table>
	<br>
	<!-- pagination -->
	<div class="pagination">
		{{ $matkuls->links() }}
	</div>
@endsection