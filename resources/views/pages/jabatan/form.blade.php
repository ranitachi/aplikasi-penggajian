<div class="container-fluid">
		<h2>Input Data Jabatan</h2>
		<hr>
		<form action="{{ route('jabatan.store') }}" method="POST" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="namaJabatan">Nama Jabatan</label>
				<input type="text" class="form-control" name="namaJabatan" required="required">
			</div>
			<div class="form-group">
				<label for="nominal">Nominal</label>
				<input type="text" class="form-control" name="nominal" required="required">
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