<div class="container-fluid">
    <h2>Input Data Kontrak</h2>
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
    <form action="{{ route('kontrak-karyawan.store') }}" method="POST" >
        {{ csrf_field() }}
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