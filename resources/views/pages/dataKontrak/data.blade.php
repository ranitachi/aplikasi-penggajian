<div class="container-fluid">
    <h2>Table Data Kontrak</h2>
    <hr>
    <table class="table table-bordered">
        <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Karyawan ID</th>
            <th>Tanggal Awal Kontrak</th>
            <th>Tanggal Akhir Kontrak</th>
            <th>Status Kontrak</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>
                <th>{{ $datas->id }}</th>
                <th>{{ $datas->karyawan_id }}</th>
                <th>{{ $datas->tgl_awal_kontrak }}</th>
                <th>{{ $datas->tgl_akhir_kontrak }}</th>
                <th>{{ $datas->status_kontrak }}</th>
                <td>
                    <form action="{{ route('kontrak-karyawan.destroy', $datas->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="#"  data-toggle="modal" data-target="#exampleModal" data-karyawan="{{$datas->karyawan_id}}" data-awal="{{$datas->tgl_awal_kontrak}}" data-akhir="{{$datas->tgl_akhir_kontrak}}" data-status="{{$datas->status_kontrak}}" data-id="{{$datas->id}}" style="width: 100px" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" style="width: 100px">Delete</button>
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
                <form action="{{ route('kontrak-karyawan.update', 1) }}" method="POST" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control idd" name="idd" required="required">
                    <div class="form-group">
                        <label for="karyawan">Karyawan ID</label>
                        <input type="number" class="form-control" name="karyawan" id="karyawan" required="required">
                    </div>
                    <div class="form-group">
                        <label for="awal">Tanggal Awal Kontrak</label>
                        <input type="date" class="form-control" name="awal" id="awal" required="required">
                    </div>
                    <div class="form-group">
                        <label for="akhir">Tanggal Akhir Kontrak</label>
                        <input type="date" class="form-control" name="akhir" id="akhir" required="required">
                    </div>
                    <div class="form-group">
                        <label for="status">Status Kontrak</label>
                        <select class="form-control" name="status" id="status">
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
        var karyawans = button.data('karyawan')
        var awals = button.data('awal')
        var akhirs = button.data('akhir')
        var statuss = button.data('status')
        var ids = button.data('id')
        var modal = $(this)

        modal.find('.modal-body #karyawan').val(karyawans)
        modal.find('.modal-body #awal').val(awals)
        modal.find('.modal-body #akhir').val(akhirs)
        modal.find('.modal-body #status').val(statuss)
        modal.find('.modal-body .idd').val(ids)
    })
</script>