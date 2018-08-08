 <!-- MAIN -->
<main class="col-10 py-3">
	
	<div class="container-fluid">
		
		<h4 class="text-center font-weight-bold text-uppercase">Data Peserta Sertifikasi SKKNI</h4>

		<a href="<?php echo site_url('Homepage/TampilInputDataPeserta')?>" class="btn btn-sm btn-success font-weight-bold text-center float-right mb-3">
			Tambah Peserta
		</a>

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
					<th class="text-center" scope="col">Action</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($id_data_pribadi as $key => $value): ?>
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
						<td>
							<form action="<?php echo site_url('Homepage/DeleteDataPeserta') ?>" method="post" accept-charset="utf-8">
								
								<button type="submit" class="btn btn-sm btn-danger btn-block text-center font-weight-bold" name="delete_peserta_button" value="<?php echo $id_data_pribadi[$key] ?>" id="delete_peserta_button">
									Delete
								</button>
							</form>

							<form class="mt-1" action="<?php echo site_url('Homepage/EditDataPeserta') ?>" method="post" accept-charset="utf-8">
								
								<button type="submit" class="btn btn-sm btn-info btn-block text-center font-weight-bold" name="edit_peserta_button" value="<?php echo $id_data_pribadi[$key] ?>" id="edit_peserta_button">
									Edit
								</button>
							</form>
						</td>	
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>	
    </div>    
</main>
<!-- Main Col END -->