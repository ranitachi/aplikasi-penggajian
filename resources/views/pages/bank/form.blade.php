<div class="container-fluid">
		<h2>Input Data Bank</h2>
		<hr>
		<form action="{{ url('home2') }}" method="POST" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="namaBank">Nama Bank</label>
				<input type="text" class="form-control" name="namaBank" required="required">
			</div>
			<div class="form-group">
				<label for="cabang">Cabang</label>
				<input type="text" class="form-control" name="cabang" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Submit</button>
				<button type="reset" class="btn btn-md btn-danger">Cancel</button>
			</div>
		</form>
	</div>