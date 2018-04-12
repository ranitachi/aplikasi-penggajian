<div class="container-fluid">
		<h2>Table Data Jabatan</h2>
		<hr>
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Nama Jabatan</th>
					<th>Nominal</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->nama_jabatan }}</th>
					<th>{{ $datas->nominal }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('jabatan.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="#" data-toggle="modal" data-target="#exampleModal" data-namajabatan="{{$datas->nama_jabatan}}" data-nominal="{{$datas->nominal}}" data-idjabatan="{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a>
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
                    <form action="{{ route('jabatan.update',1) }}" method="POST" >
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" readonly="readonly" class="form-control idjabatan" name="idjabatan" required="required">
                        <div class="form-group">
                            <label for="namaJabatan">Nama Jabatan</label>
                            <input type="text" class="form-control namaJabatan" name="namaJabatan" required="required">
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="text" class="form-control nominal" name="nominal" required="required">
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
            var namajabatan = button.data('namajabatan')
            var nominal = button.data('nominal')
            var id = button.data('idjabatan')
            var modal = $(this)

            modal.find('.modal-body .namaJabatan').val(namajabatan)
            modal.find('.modal-body .nominal').val(nominal)
            modal.find('.modal-body .idjabatan').val(id)
        })
    </script>