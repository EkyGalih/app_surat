@extends('layout')
@section('judul')
Disposisi Surat Undangan
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Surat Undangan
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Surat Masuk<small> Undangan</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<form method="post" action="{{ url('suratUndangan/'.$data->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
				<div class="col-sm-6 col-md-6 col-xs-6 pull-left">
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_terima">Tanggal Terima <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input id="tgl_terima" class="form-control col-md-7 col-xs-12" name="tgl_terima" value="{{ $data->tgl_terima }}" required="required" type="text" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asal_surat">Asal Surat <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input type="text" id="asal_surat" name="asal_surat" value="{{ $data->asal_surat }}" required="required" class="form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input type="text" id="tgl_surat" name="tgl_surat" value="{{ $data->tgl_surat }}" required="required" class="form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label for="password" class="control-label col-md-3">Diteruskan <span class="required">*</span></label>
						<div class="col-md-9 col-sm-9 col-xs-9">
							@foreach($divisi as $d)
							<input type="checkbox" name="diteruskan[]" value="{{ $d->nama_departemen }}"> {{ $d->nama_departemen }} <br/>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 col-md-6">
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_klasifikasi">Kode Klasifikasi <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input type="text" id="kd_klasifikasi" name="kd_klasifikasi" value="{{ $data->kd_klasifikasi }}" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No.Surat <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input type="text" id="no_surat" name="no_surat" value="{{ $data->no_surat }}" required="required" class="form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="perihal">Perihal <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<input id="perihal" type="text" name="perihal" value="{{ $data->perihal }}" class="optional form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isi_disposisi">Isi Disposisi <span class="required">*</span>
						</label>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<textarea id="isi_disposisi" required="required" name="isi_disposisi" class="form-control col-md-7 col-xs-12">{{ $data->isi_disposisi }}</textarea>
						</div>
					</div>
					<input type="hidden" name="status_smund" value="unread">
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" class="btn btn-default">
								<i class="fa fa-remove fa-fw"></i> Batal
							</button>
							<button id="send" type="submit" class="btn btn-success">
								<i class="fa fa-legal fa-fw"></i> Disposisi
							</button>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
</div>
@endsection