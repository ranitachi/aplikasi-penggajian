<div class="container-fluid">
		<h2>Table Data Potongan</h2>
		<hr>
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Nip</th>
					<th>Deskripsi</th>
					<th>Nominal</th>
					<th>Tanggal Ambil</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->nip }}</th>
					<th>{{ $datas->desc }}</th>
					<th>{{ $datas->nominal }}</th>
					<th>{{ $datas->tgl_ambil }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('jenis-potongan.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="#"  data-toggle="modal" data-target="#exampleModal" data-nip="{{$datas->nip}}" data-desc="{{$datas->desc}}" data-nominal="{{$datas->nominal}}" data-tglambil="{{$datas->tgl_ambil}}" data-idd="{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a>
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
                <form action="{{ route('jenis-potongan.update', 1) }}" method="POST" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control idd" name="idd" required="required">
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" class="form-control nip" name="nip" required="required">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control desc" name="desc" required="required" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="number" class="form-control nominal" name="nominal" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tglAmbil">Tanggal Ambil</label>
                        <input type="date" class="form-control tgll" name="tglAmbil" required="required">
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
        var nip = button.data('nip')
        var desc = button.data('desc')
        var nominal = button.data('nominal')
        var tgl = button.data('tglambil')
        var id = button.data('idd')
        var modal = $(this)

        modal.find('.modal-body .nip').val(nip)
        modal.find('.modal-body .desc').val(desc)
        modal.find('.modal-body .nominal').val(nominal)
        modal.find('.modal-body .tgll').val(tgl)
        modal.find('.modal-body .idd').val(id)
    })
</script>