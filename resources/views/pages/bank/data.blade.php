<div class="container-fluid">
		<h2>Table Data Bank</h2>
		<hr>
		<table class="table table-bordered">
			<thead class="table-primary">
				<tr>
					<th>Nama Bank</th>
					<th>Cabang</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->nama_bank }}</th>
                    <th>{{ $datas->cabang }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('data-bank.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="{{ route('data-bank.edit', $datas->id) }}" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-namabanks="{{$datas->nama_bank}}" data-cabang="{{$datas->cabang}}" data-idbanks="{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a>
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
                <form action="{{ route('data-bank.update', 1) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control idbank" name="idbank" required="required">
                    <div class="form-group">
                        <label for="namaBank">Nama Bank</label>
                        <input type="text" class="form-control nameBank" name="namaBankupdate" required="required">
                    </div>
                    <div class="form-group">
                        <label for="cabang">Cabang</label>
                        <input type="text" class="form-control cabang" name="cabangupdate" required="required">
                    </div>
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <select class="form-control" name="flagupdate">
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
        var namabank = button.data('namabanks')
        var cabang = button.data('cabang')
        var id = button.data('idbanks')
        var modal = $(this)

        modal.find('.modal-body .nameBank').val(namabank)
        modal.find('.modal-body .cabang').val(cabang)
        modal.find('.modal-body .idbank').val(id)
    })
</script>