@extends('layouts.master')
@section('content')

<div class="container-fluid">
		<h2>Input Data Cuti</h2>
		<hr>
		<form action="{{ route('jenis-cuti.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="jenisCuti">Jenis Cuti</label>
				<input type="text" class="form-control" name="jenisCuti" required="required">
			</div>
			<div class="form-group">
				<label for="jumlahHari">Jumlah Hari</label>
				<input type="number" class="form-control" name="jumlahHari" required="required">
			</div>
			<div class="form-group">
				<label for="tanggalMulai">Tanggal Mulai</label>
				<input type="date" class="form-control" name="tanggalMulai" required="required">
			</div>
			<div class="form-group">
				<label for="tanggalAkhir">Tanggal Akhir</label>
				<input type="date" class="form-control" name="tanggalAkhir" required="required">
			</div>
			<div class="form-group">
				<label for="desc">Deskripsi</label>
				<textarea class="form-control" name="desc" required="required" style="resize: none;"></textarea>
			</div>
			<div class="form-group">
				<label for="berkas">Berkas</label>
				<input type="file" class="form-control" name="berkas" required="required">
			</div>
			<div class="form-group">
				<label for="nip">Nip</label>
				<input type="text" class="form-control" name="nip" required="required">
			</div>
			<div class="form-group">
                <label for="flag">Flag</label>
                <select class="form-control" name="flag">
                    <option value="1">Active</option>
                    <option value="0">Non Active</option>
                </select>
            </div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Submit</button>
				<button type="reset" class="btn btn-md btn-danger">Cancel</button>
			</div>
		</form>
	</div>
@endsection