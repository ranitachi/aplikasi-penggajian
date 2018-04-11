<div class="container-fluid">
		<h2>Input Data Komponen Gaji</h2>
		<hr>
		<form action="{{ route('komponen-gaji.store') }}" method="POST" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="idKomponen">Id Komponen</label>
				<input type="number" class="form-control" name="idKomponen" required="required">
			</div>
			<div class="form-group">
				<label for="idBatchGaji">Id Batch Gaji</label>
				<input type="number" class="form-control" name="idBatchGaji" required="required">
			</div>
			<div class="form-group">
				<label for="nominal">Nominal</label>
				<input type="number" class="form-control" name="nominal" required="required">
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