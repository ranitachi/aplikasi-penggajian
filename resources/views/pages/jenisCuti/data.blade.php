<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h2>Table Data Cuti</h2>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-2">
			<br>
			<a href="{{ url('tambah-data-cuti') }}" class="btn btn-sm btn-success">Tambah Data</a>
		</div>
	</div>
		<hr>
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Jenis Cuti</th>
					<th>Jumlah Hari</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Akhir</th>
					<th>Deskripsi</th>
					<th>Berkas</th>
					<th>Nip</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->jenis_cuti }}</th>
					<th>{{ $datas->jumlah_hari }}</th>
					<th>{{ $datas->tanggal_mulai }}</th>
					<th>{{ $datas->tanggal_akhir }}</th>
					<th>{{ $datas->desc }}</th>
					<th>{{ $datas->berkas }}</th>
					<th>{{ $datas->nip }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('jenis-cuti.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="{{ route('jenis-cuti.update', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
							<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>