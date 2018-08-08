 <!-- MAIN -->
<main class="col-10 py-3">
	
	<div class="container-fluid">
		
		<h4 class="text-center font-weight-bold text-uppercase">Laporan Sertifikasi SKKNI</h4>

		<table class="table table-sm table-striped table-hover table-bordered table-responsive">
			<thead>
				<tr class="thead-default table-success">
					<th class="text-center" scope="col">No</th>
					<th class="text-center" scope="col">NIK</th>
					<th class="text-center" scope="col">Nama</th>
					<th class="text-center" scope="col">No. Hp</th>
					<th class="text-center" scope="col">Tempat Tanggal Lahir</th>
					<th class="text-center" scope="col">Email</th>
					<th class="text-center" scope="col">Skema</th>
					<th class="text-center" scope="col">Tempat Uji Kompetensi</th>
					<th class="text-center" scope="col">Rekomendasi</th>
					<th class="text-center" scope="col">Tanggal Sertifikasi</th>
					<th class="text-center" scope="col">Organisasi</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($nik as $key => $value): ?>
					<tr>
						<th class="text-center"><?php echo $key+1 ?></th>
						<td><?php echo $nik[$key] ?></td>
						<td><?php echo $nama[$key] ?></td>
						<td><?php echo $nohp[$key] ?></td>
						<td><?php echo $tmptlahir[$key].", ".$tgllahir[$key] ?></td>
						<td><?php echo $email[$key] ?></td>
						<td><?php echo $skema[$key] ?></td>
						<td><?php echo $tmptujikom[$key] ?></td>
						<td><?php echo $rekomendasi[$key] ?></td>
						<td><?php echo $ttsertifikasi[$key] ?></td>
						<td><?php echo $organisasi[$key] ?></td>
						
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>	
    </div>    
</main>
<!-- Main Col END -->