<div class="container-fluid">
		<h2>Table Data Komponen Gaji</h2>
		<hr>
		<table class="table">
			<thead class="table-primary">
				<tr>
					<th>Id Komponen</th>
					<th>Id Batch Gaji</th>
					<th>Nominal</th>
					<th>Flag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $datas)
				<tr>
					<th>{{ $datas->id_komponen }}</th>
					<th>{{ $datas->id_batch_gaji }}</th>
					<th>{{ $datas->nominal }}</th>
					<th>{{ $datas->flag }}</th>
					<td>
						<form action="{{ route('komponen-gaji.destroy', $datas->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="{{ route('komponen-gaji.update', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
							<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>