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
							<a href="#" data-toggle="modal" data-target="#exampleModal" data-jeniscuti="{{$datas->jenis_cuti}}" data-jumlahhari="{{$datas->jumlah_hari}}" data-tanggalmulai="{{$datas->tanggal_mulai}}" data-tanggalakhir="{{$datas->tanggal_akhir}}" data-desc="{{$datas->desc}}" data-nip="{{$datas->nip}}" data-idcuti="{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a>
							<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jenis-cuti.update', 1) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control idcuti" name="idcuti" required="required">
                    <div class="form-group">
                        <label for="jenisCuti">Jenis Cuti</label>
                        <input type="text" class="form-control jeniscuti" name="jenisCuti" required="required">
                    </div>
                    <div class="form-group">
                        <label for="jumlahHari">Jumlah Hari</label>
                        <input type="number" class="form-control jumlahhari" name="jumlahHari" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tanggalMulai">Tanggal Mulai</label>
                        <input type="date" class="form-control tanggalmulai" name="tanggalMulai" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tanggalAkhir">Tanggal Akhir</label>
                        <input type="date" class="form-control tanggalakhir" name="tanggalAkhir" required="required">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control desc" name="desc" required="required" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="text" class="form-control nip" name="nip" required="required">
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
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var jeniscuti = button.data('jeniscuti')
        var jumlahhari = button.data('jumlahhari')
        var tanggalmulai = button.data('tanggalmulai')
        var tanggalakhir = button.data('tanggalakhir')
        var desc = button.data('desc')
        var nip = button.data('nip')
        var idcuti = button.data('idcuti')
        var modal = $(this)

        modal.find('.modal-body .jeniscuti').val(jeniscuti)
        modal.find('.modal-body .jumlahhari').val(jumlahhari)
        modal.find('.modal-body .tanggalmulai').val(tanggalmulai)
        modal.find('.modal-body .tanggalakhir').val(tanggalakhir)
        modal.find('.modal-body .desc').val(desc)
        modal.find('.modal-body .nip').val(nip)
        modal.find('.modal-body .idcuti').val(idcuti)
    })
</script>