 <!-- MAIN -->
<main class="col py-3">
	
	<div class="container-fluid">
		<h1 class="text-center font-weight-bold text-uppercase text-secondary">
			Input Data Peserta Baru
		</h1>


		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					
				</div>

				<div class="card-body" id="collapse-edit-admin">
					<form id="input_data_peserta" action="<?php echo site_url('Homepage/InsertInputDataPeserta') ?>" method="post" accept-charset="utf-8" >

						<div class="form-group">
							<div class="row">
								<label for="nik_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">NIK</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control " type="number"  required autocomplete="off" name="nik_input" id="nik_input">
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="nama_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Nama Lengkap</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control" type="text"  required name="nama_input" id="nama_input"  oninvalid="this.setCustomValidity('Harus Diisi')">
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="nohp_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Nomor HP</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control" type="number" required autocomplete="off" name="nohp_input" id="nohp_input">
							    </div>
							</div>
						</div>

						<div class="form-group pb-3">
							<div class="row">
								<label for="tmptlahir_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Tempat Lahir</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input type="text" class="form-control" required autocomplete="off" name="tmptlahir_input" id="tmptlahir_input" oninvalid="this.setCustomValidity('Tidak Boleh Kosong')">
							    </div>
							</div>
						</div>

						<div class="form-group pb-3">
							<div class="row">
								<label for="tgllahir_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Tanggal Lahir</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="tgllahir_input" id="tgllahir_input">
							    </div>
							</div>
						</div>

						<div class="form-group pb-3">
							<div class="row">
								<label for="email_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Email</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input type="email" class="form-control"required name="email_input" id="email_input" oninvalid="this.setCustomValidity('Harus Sesuai Format Email')">
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="organisasi_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Organisasi</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control" type="text" required autocomplete="off" name="organisasi_input" id="organisasi_input">
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="skema_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Skema</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<select name="pilih_skema" class="form-control">
							    		<?php foreach ($kd_skema as $key => $value): ?>
							    			<option id="skema_input" name="skema_input" value="<?php echo $kd_skema[$key] ?>"><?php echo $nama_skema[$key] ?></option>
							    		<?php endforeach ?>
							    	</select>
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="tmptujian_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Tempat Ujian</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<select name="pilih_tempat_ujian" class="form-control">
							    		<?php foreach ($kd_tmptujikom as $key => $value): ?>
							    			<option id="tmptujian_input" name="tmptujian_input" value="<?php echo $kd_tmptujikom[$key] ?>"><?php echo $nama_tmptujikom[$key] ?></option>
							    		<?php endforeach ?>
							    	</select>
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="rekomendasi_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">rekomendasi</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control" type="text" required autocomplete="off" name="rekomendasi_input" id="rekomendasi_input">
							    </div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="tglsertifikasi_input" class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 col-form-label input-group-prepend input-group-text">Tanggal Sertifikasi</label>
							    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							    	<input class="form-control" type="text" required autocomplete="off" name="tglsertifikasi_input" id="tglsertifikasi_input">
							    </div>
							</div>
						</div>


						<button type="submit" class="btn btn-success text-center float-right" name="simpan_peserta_button" value="baru" id="simpan-peserta-button">
							Simpan
						</button>

						<input type="reset" class="btn btn-danger text-center float-right mr-2" id="reset_peserta_button" value="Clear">
						</input>

					</form>


					
				</div>
			</div>
		</div>	
    </div>    
</main>
<!-- Main Col END -->

<script>
	$(function() {
		$( "#tgllahir_input" ).datepicker();
	});

	$(function() {
		$( "#tglsertifikasi_input" ).datepicker();
	});
</script>		
	


<script>
	$(function(){
	    $("#input_data_peserta").validate(
	      {
	        rules: 
	        {
	          nik_input: 
	          {
	            required: true,
	            rangelength:[16,16]
	          },
	          nama_input: 
	          {
	            required: true,
	            minlength:3
	          },
	          nohp_input:
	          {
	            required: true,
	            rangelength:[11,14]
	          },
	          tmptlahir_input: 
	          {
	            required: true,
	            minlength:3
	          },
	          email_input: 
	          {
	            required: true,
	            email: true
	          },
	          organisasi_input: 
	          {
	            required: true,
	            minlength:3
	          },
	          rekomendasi_input: 
	          {
	            required: true,
	            minlength:3
	          },


	        }
	      });	
	});
</script>	