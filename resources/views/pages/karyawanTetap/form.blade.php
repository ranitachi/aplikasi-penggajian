<div class="container-fluid">
    <h2>Input Data Karyawan Tetap</h2>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('karyawan-tetap.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nip">Nip</label>
            <input type="number" class="form-control" name="nip" required="required">
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
            <select class="form-control" name="gender">
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select class="form-control" name="agama">
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
            <select class="form-control" name="pernikahan">
                <option value="1">Sudah Menikah</option>
                <option value="0">Belum Menikah</option>
            </select>
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