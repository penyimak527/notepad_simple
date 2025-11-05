<!-- <php
    print_r($data)
    ?> -->
<div class="appbarn">
	<a href="<?= base_url('notee/nootes')?>">
		<ion-icon name="arrow-back-outline"></ion-icon>
	</a>    
	<h2>Detail Note</h2>
</div>
<hr />
<section class="halaman">
	<div class="form-tambah">
		<label for="">
			<h3><?php echo strtoupper($data['judul'])?></h3>
		</label>
        <div class="isi">
        <div class="detail">
		<p><?php echo $data['content']?></p>        
        <?php
        if($data['gambar'] == ''){
            echo"gambar tidak ada";
        }
        else { ?>
        <img src="<?php echo base_url();?>assets/uploads/<?php echo $data['gambar'];?>" width="99" alt="">
<?php }  ?>
        </div>
		<details> <summary>Detail</summary>
        <p>Dibuat oleh : <?php echo ucwords($data['nama'])?></p>
        <p>
             Pada tanggal :
				<?php echo $data['tanggal']?>
			</p>
		</details>
        </div>
	</div>
</section>

<style>
	.halaman {
        border-radius: 10px;
        /* width: 100%; */
        padding: 10px;
        background: whitesmoke;
        margin: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}
    .halaman h3{
        margin: 0.5rem;
        text-align: left;
        padding: 2px;
    }
    .halaman .isi p{
        margin: 3px;
        padding: 2px;
    }
    .halaman .isi{
    text-align: left;
    padding: 5px;
    margin: 20px;
    color: black;
    }
    .detail p {
        margin: 5px;
        padding: 4px;
    }
    .detail img{
        margin: 3px;
        width: 40%;
    }
</style>
