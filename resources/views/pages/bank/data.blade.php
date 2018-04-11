<div class="container-fluid">
		<h2>Table Data Bank</h2>
		<hr>
		@if(Session::has('alert-success'))
		<div class="alert alert-success">
			<strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
		</div>
		@endif
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Nama Bank</th>
					<th>Cabang</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
				</tr>
			</tbody>
		</table>
	</div>