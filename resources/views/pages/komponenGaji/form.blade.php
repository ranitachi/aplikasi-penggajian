<div class="container-fluid">
		<h2>Input Data Komponen Gaji</h2>
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
		<form action="{{ route('komponen-gaji.store') }}" method="POST" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="idKomponen"> Komponen</label>
				<input type="text" class="form-control" name="komponen" required="required">
			</div>
			<div class="form-group">
                <label for="flag">Kategori</label>
                <select class="form-control" name="tipe_komponen">
                    <option value="1">Pemasukan</option>
                    <option value="0">Potongan</option>
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