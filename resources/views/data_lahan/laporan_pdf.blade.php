<!DOCTYPE html>
<html>
<head>
	<title>Laporan Rekap Lahan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Rekap Lahan</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Pemilik</th>
				<th>Luas Lahan (Hektar)</th>
				<th>Kategori Lahan</th>
				<th>Alamat Lokasi Lahan</th>
				<th>Keterangan Lahan</th>
                <th>Status Verifikasi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($lahan as $item)
				<tr>
					<td>{{ $item->supplier }}</td>
					<td>{{ $item->luas }}</td>
					<td>{{ $item->categorylahan }}</td>
					<td>{{ $item->lokasi }}</td>
					<td>{{ $item->keterangan }}</td>
					<td>{{ $item->statlahan }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>