<div class="container-fluid">
    <h2>Table Data Karyawan Kontrak</h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>ID Jabatan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>NPWP</th>
                <th>Nomor KTP</th>
                <th>Nomor KK</th>
                <th>ID Bank</th>
                <th>Nomor Rekening</th>
                <th>Tanggal Masuk</th>
                <th>Status Pernikahan</th>
                <th>Flag</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $datas)
                <tr>
                    <th>{{ $datas->id }}</th>
                    <th>{{ $datas->nip }}</th>
                    <th>{{ $datas->nama }}</th>
                    <th>{{ $datas->tempat_lahir }}</th>
                    <th>{{ $datas->tgl_lahir }}</th>
                    <th>{{ $datas->jenis_kelamin }}</th>
                    <th>{{ $datas->agama }}</th>
                    <th>{{ $datas->id_jabatan }}</th>
                    <th>{{ $datas->alamat }}</th>
                    <th>{{ $datas->email }}</th>
                    <th>{{ $datas->telp }}</th>
                    <th>{{ $datas->npwp }}</th>
                    <th>{{ $datas->no_ktp }}</th>
                    <th>{{ $datas->no_kk }}</th>
                    <th>{{ $datas->id_bank }}</th>
                    <th>{{ $datas->no_rekening }}</th>
                    <th>{{ $datas->tgl_masuk }}</th>
                    <th>{{ $datas->status_pernikahan }}</th>
                    <th>{{ $datas->flag }}</th>
                    <td>
                        <form action="{{ route('karyawan-kontrak.destroy', $datas->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="#"  data-toggle="modal" data-target="#exampleModal" data-id="{{$datas->id}}" data-nip="{{$datas->nip}}" data-nama="{{$datas->nama}}" data-tempat="{{$datas->tempat_lahir}}" data-tanggal="{{$datas->tgl_lahir}}" data-gender="{{$datas->jenis_kelamin}}" data-agama="{{$datas->agama}}" data-jabatan="{{$datas->id_jabatan}}" data-alamat="{{$datas->alamat}}" data-email="{{$datas->email}}" data-telp="{{$datas->telp}}" data-npwp="{{$datas->npwp}}" data-ktp="{{$datas->no_ktp}}" data-kk="{{$datas->no_kk}}" data-bank="{{$datas->id_bank}}" data-rekening="{{$datas->no_rekening}}" data-masuk="{{$datas->tgl_masuk}}" data-pernikahan="{{$datas->status_pernikahan}}" data-flag="{{$datas->flag}}" style="width: 100px" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" style="width: 100px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
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
                <form action="{{ route('karyawan-kontrak.update', 1) }}" method="POST" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control idd" name="idd" required="required">
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" class="form-control" name="nip" id="nip" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required="required">
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">ID Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required="required">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" required="required" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="number" class="form-control" id="telp" name="telp" required="required">
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="number" class="form-control" id="npwp" name="npwp" required="required">
                    </div>
                    <div class="form-group">
                        <label for="ktp">Nomor KTP</label>
                        <input type="number" class="form-control" id="ktp" name="ktp" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kk">Nomor KK</label>
                        <input type="number" class="form-control" id="kk" name="kk" required="required">
                    </div>
                    <div class="form-group">
                        <label for="bank">ID Bank</label>
                        <input type="text" class="form-control" id="bank" name="bank" required="required">
                    </div>
                    <div class="form-group">
                        <label for="rekening">Nomor Rekening</label>
                        <input type="number" class="form-control" id="rekening" name="rekening" required="required">
                    </div>
                    <div class="form-group">
                        <label for="masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="masuk" name="masuk" required="required">
                    </div>
                    <div class="form-group">
                        <label for="pernikahan">Status Pernikahan</label>
                        <select class="form-control" name="pernikahan" id="pernikahan">
                            <option value="1">Sudah Menikah</option>
                            <option value="0">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <select class="form-control" name="flag" id="flag">
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
        var nips = button.data('nip')
        var namas = button.data('nama')
        var tempats = button.data('tempat')
        var tanggals = button.data('tanggal')
        var genders = button.data('gender')
        var ids = button.data('id')
        var agamas = button.data('agama')
        var jabatans = button.data('jabatan')
        var alamats = button.data('alamat')
        var emails = button.data('email')
        var telps = button.data('telp')
        var npwps = button.data('npwp')
        var ktps = button.data('ktp')
        var kks = button.data('kk')
        var banks = button.data('bank')
        var rekenings = button.data('rekening')
        var masuks = button.data('masuk')
        var pernikahans = button.data('pernikahan')
        var flags = button.data('flag')
        var modal = $(this)

        modal.find('.modal-body #nip').val(nips)
        modal.find('.modal-body #nama').val(namas)
        modal.find('.modal-body #tempat').val(tempats)
        modal.find('.modal-body #tanggal').val(tanggals)
        modal.find('.modal-body #gender').val(genders)
        modal.find('.modal-body #agama').val(agamas)
        modal.find('.modal-body #jabatan').val(jabatans)
        modal.find('.modal-body #alamat').val(alamats)
        modal.find('.modal-body #email').val(emails)
        modal.find('.modal-body #telp').val(telps)
        modal.find('.modal-body #npwp').val(npwps)
        modal.find('.modal-body #ktp').val(ktps)
        modal.find('.modal-body #kk').val(kks)
        modal.find('.modal-body #bank').val(banks)
        modal.find('.modal-body #rekening').val(rekenings)
        modal.find('.modal-body #masuk').val(masuks)
        modal.find('.modal-body #pernikahan').val(pernikahans)
        modal.find('.modal-body #flag').val(flags)
        modal.find('.modal-body .idd').val(ids)
    })
</script>