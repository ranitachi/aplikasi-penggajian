<div class="container-fluid">
		<h2>Input Data Potongan</h2>
		<hr>
		<form action="{{ route('jenis-potongan.store') }}" method="POST" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="nip">Nip</label>
				<input type="number" class="form-control" name="nip" required="required">
			</div>
			<div class="form-group">
				<label for="desc">Deskripsi</label>
				<textarea class="form-control" name="desc" required="required" style="resize: none;"></textarea>
			</div>
			<div class="form-group">
				<label for="nominal">Nominal</label>
				<input type="number" class="form-control" name="nominal" required="required">
			</div>
			<div class="form-group">
				<label for="tglAmbil">Tanggal Ambil</label>
				<input type="date" class="form-control" name="tglAmbil" required="required">
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