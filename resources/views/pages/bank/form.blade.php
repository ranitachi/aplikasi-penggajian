<div class="container-fluid">
		<h2>Input Data Bank</h2>
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
		<form action="{{ route('data-bank.store') }}" method="POST" >
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