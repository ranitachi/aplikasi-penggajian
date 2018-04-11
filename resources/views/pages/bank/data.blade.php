<div class="container-fluid">
		<h2>Table Data Bank</h2>
		<hr>
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Nama Bank</th>
					<th>Cabang</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->nama_bank }}</th>
					<th>{{ $datas->cabang }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('data-bank.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="{{ route('data-bank.update', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
							<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>