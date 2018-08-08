 <!-- MAIN -->
<main class="col-10 py-3">
	
	<div class="container-fluid">
		
		<h2 class="text-center font-weight-bold text-uppercase">Laporan Sertifikasi SKKNI</h2>

		<h4 class="text-center font-weight-bold text-uppercase pt-3">Berdasarkan Skema</h4>

		<table class="table table-sm table-striped table-hover table-bordered">
			<thead>
				<tr class="thead-default table-success">
					<?php foreach ($cskema_sertifikasi as $key => $value): ?>
						<th class="text-center" scope="col"><?php echo $cskema_sertifikasi[$key] ?></th>
					<?php endforeach ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($j_cskema_sertifikasi as $key => $value): ?>
						<td class="text-center" scope="col"><?php echo $j_cskema_sertifikasi[$key] ?></td>
					<?php endforeach ?>
				</tr>
			</tbody>
		</table>



		<h4 class="text-center font-weight-bold text-uppercase pt-3">Berdasarkan Tempat Ujian</h4>

		<table class="table table-sm table-striped table-hover table-bordered">
			<thead>
				<tr class="thead-default table-success">
					<?php foreach ($ctmptujikom_sertifikasi as $key => $value): ?>
						<th class="text-center" scope="col"><?php echo $ctmptujikom_sertifikasi[$key] ?></th>
					<?php endforeach ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($j_ctmptujikom_sertifikasi as $key => $value): ?>
						<td class="text-center" scope="col"><?php echo $j_ctmptujikom_sertifikasi[$key] ?></td>
					<?php endforeach ?>
				</tr>
			</tbody>
		</table>



		<h4 class="text-center font-weight-bold text-uppercase pt-3">Berdasarkan Organisasi</h4>

		<table class="table table-sm table-striped table-hover table-bordered">
			<thead>
				<tr class="thead-default table-success">
					<?php foreach ($corganisasi_sertifikasi as $key => $value): ?>
						<th class="text-center" scope="col"><?php echo $corganisasi_sertifikasi[$key] ?></th>
					<?php endforeach ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($j_corganisasi_sertifikasi as $key => $value): ?>
						<td class="text-center" scope="col"><?php echo $j_corganisasi_sertifikasi[$key] ?></td>
					<?php endforeach ?>
				</tr>
			</tbody>
		</table>


		<h4 class="text-center font-weight-bold text-uppercase pt-3">Berdasarkan Tanggal Sertifikasi</h4>

		<table class="table table-sm table-striped table-hover table-bordered">
			<thead>
				<tr class="thead-default table-success">
					<?php foreach ($cttsertifikasi_sertifikasi as $key => $value): ?>
						<th class="text-center" scope="col"><?php echo $cttsertifikasi_sertifikasi[$key] ?></th>
					<?php endforeach ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($j_cttsertifikasi_sertifikasi as $key => $value): ?>
						<td class="text-center" scope="col"><?php echo $j_cttsertifikasi_sertifikasi[$key] ?></td>
					<?php endforeach ?>
				</tr>
			</tbody>
		</table>




		<h4 class="text-center font-weight-bold text-uppercase pt-3">Berdasarkan Data Keseluruhan</h4>
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