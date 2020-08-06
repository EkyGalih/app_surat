@extends('layout')
@section('judul')
Divisi BWS NT I
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Divisi<small></i> BWS NT I</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="#"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			@if(Auth::user()->divisi == 'Administrator')
			<a href="{{ url('/divisi/create') }}" class="btn btn-default submit">Tambah Data</a>
			@endif
			<table id="datatable-responsive" class="table table-striped table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
				<thead>
					<tr role="row">
						<th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Nama Divisi</th>
						@if(Auth::user()->divisi == 'Administrator')
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Ubah</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Hapus</th>
						@endif
					</tr>
				</thead>
				<tbody>
				<?php $no=1; ?>
				@foreach ($divisi as $d)
				<tr>
					<td>{{ $no }}</td>
					<td>{{ $d->nama_departemen }}</td>
					@if(Auth::user()->divisi == 'Administrator')
					<td>
						<a href="{{ url('divisi/'.$d->id.'/edit') }}" class="btn btn-warning btn-xs">
							<i class="fa fa-pencil"></i> Edit
						</a>
						</td>
						<td>
						<form action="{{ url('divisi/'.$d->id) }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger btn-xs">
								<i class="fa fa-trash-o"></i> Delete
							</button>
						</form>
					</td>
					@endif
				</tr>
				<?php $no++; ?>
				@endforeach
				</tbody>
			</table>
			<div class="dataTables_info" id="datatable-responsive" role="status" aria-live="polite"></div>
		</div>
	</div>
</div>
@endsection