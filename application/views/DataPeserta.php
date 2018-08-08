 <!-- MAIN -->
<main class="col py-3">
	
	<div class="container-fluid">
		
		<h4 class="text-center font-weight-bold text-uppercase">Data Peserta Sertifikasi SKKNI</h4>

		<a href="<?php echo site_url('Homepage/TampilInputDataPeserta')?>" class="btn btn-sm btn-success font-weight-bold text-center float-right mb-3">
			Tambah Peserta
		</a>



		<table class="table table-sm table-striped table-hover table-bordered">
			<thead>
				<tr class="thead-default table-success">
					<th class="text-center" scope="col">No</th>
					<th class="text-center" scope="col">NIK</th>
					<th class="text-center" scope="col">Nama</th>
					<th class="text-center" scope="col">No. Hp</th>
					<th class="text-center" scope="col">Tempat Tanggal Lahir</th>
					<th class="text-center" scope="col">Email</th>
					
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
						
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>	
    </div>    
</main>
<!-- Main Col END -->