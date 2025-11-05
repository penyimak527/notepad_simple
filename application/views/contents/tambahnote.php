<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>

<hr>
    <div class="formtambah">
        <!-- <php echo form_open_multipart('notee/TambahNote');?> -->
    <form action="<?= base_url('notee/TambahNote')?>" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="">Nama</label>
        <input type="text" name="nama" required>
        <label for="">Judul</label>
        <input type="text" name="judul" required>	
        <label for="">Content</label>
        <textarea cols="15" rows="2" name="content" ></textarea>
         <label for="">Upload Foto</label>
         <input type="file" name="gambar" >
         <div class="button">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('notee/nootes')?>" class="btn-success">Kembali</a></div>
    <!-- <php echo form_close();?> -->
    </form>
    </div>

</body>
</html>

