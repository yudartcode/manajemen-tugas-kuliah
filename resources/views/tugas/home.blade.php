@extends('layouts.master')

@section('title', 'Manajemen Tugas Kuliah')

@section('content')

	<h2 class="page-header">Manajemen Tugas Kuliah</h2>
	<hr>
	<a href="/tugas/create" title="Tambah"><button class="w3-button w3-green w3-round"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button></a>
	<div style="display:inline; float: right;">
        <i class="fa fa-calendar"></i>{{ " Tanggal sekarang : ".date('l d-M-Y')."" }}
    </div>
	<br>
	<br>
	<!-- tabel -->
	<table class="w3-table-all">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Mata Kuliah</th>
				<th>Judul Tugas</th>
				<th>Deadline</th>
				<th>Sisa Waktu</th>
				<th>Status</th>
				<th>Tindakan</th>
			</tr>
		</thead>
	@foreach ($tugas as $tgs)
		<tr>
			<td>{{ $tgs->id }}</td>
			<td>{{ $tgs->nama_matkul }}</td>
			<td>{{ $tgs->judul_tugas }}</td>
			<td>{{ date('d-M-Y',strtotime($tgs->deadline)) }}</td>

			<?php if (date('d',strtotime($tgs->deadline))-date('d') < 0): ?>
				<td>0 Hari Lagi!</td>	
			<?php else: ?>
				<td>{{ date('d',strtotime($tgs->deadline))-date('d') . " Hari Lagi!" }}</td>	
			<?php endif ?>
			
			<?php if ($tgs->status == 'Belum'): ?>
				<td><span class="w3-padding w3-small w3-deep-orange w3-round">{{ $tgs->status }}</span></td>
			<?php else: ?>
				<td><span class="w3-padding w3-small w3-green w3-round">{{ $tgs->status }}</span></td>
			<?php endif ?>

			
			<td>
				<a href="/tugas/{{ $tgs->id }}" title="Lihat"><button class="w3-button w3-blue w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                <a href="/tugas/{{ $tgs->id }}/edit" title="Edit"><button class="w3-button w3-orange w3-tiny w3-round" style="float: left;margin-right: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            	<form action="/tugas/{{ $tgs->id }}" method="post" style="float: left;">
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