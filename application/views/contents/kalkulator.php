<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>kalkulator sederhana</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
			crossorigin="anonymous"
		/>
	</head>
	<body>
		<h2 class="p-2 text-center"><?php echo $judul?></h2>

		<!-- Default Card Example -->
		<div class="card mb-4 m-5" style="width: 30rem;">
			<div class="card-header">
				<h5>Kalkulator sederhana</h5>
			</div>
			<div class="card-body">
			<?php echo form_open('kalkulator/olahdata');?>
			<div class="d-flex">
            <div class="form-group m-1">
                <label for="">Angka pertama</label>
                <input type="number" name="angka1" class="form-control">
            </div>
            <div class="form-group m-1">
                <label for="">Angka kedua</label>
                <input type="number" name="angka2" class="form-control">
            </div>
		</div>
			<select name="operasi" id="operasi" class="form-select m-1" style="width: 26.5rem; height: 2.5rem;">
				  <option selected>aritmatika</option>
				<option value="tambah" class="form-control">Tambah</option>
				<option value="kurang" class="form-control">Kurang</option>
				<option value="kali" class="form-control">Kali</option>
				<option value="bagi" class="form-control">Bagi</option>
			</select>    
			<!-- <input type="button" value="tambah" class="form-control" name="operasi">
			<input type="button" value="kurang" class="form-control" name="operasi">
			<input type="button" value="kali" class="form-control" name="operasi">
			<input type="button" value="bagi" class="form-control" name="operasi"> -->
			<button type="submit" name="submit" class="btn border">=</button>
            <?php echo form_close();?>
			<!-- <php
			if (!$hasil ) {
				// echo"data tidak ada";
				die();
			}
			else {
				?> -->
				<p><input type="number" value="<?php echo $hasil ?>" readonly class="form-control"></p>
				<!-- <php } ?> -->
			</div>
		</div>


		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
			crossorigin="anonymous"
		></script>
	</body>
</html>
