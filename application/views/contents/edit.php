<?php
//print_r($note)
?>
<div class="content">
    <section class="edit">
        <div class="formtambah">
        <?php foreach($note as $cnote){?>

            <!-- diarahkan ke dalam controller notee/update -->
             <?php echo form_open_multipart('notee/update');?>
            <!-- <form action="<= base_url() .;?>" method="post" autocomplete="off"> -->
                <div class="formi">
                    <label for="">nama</label>
                    <!-- input id itu digunakan untuk menyimpan data karena id itu tidak dapat diubah -->
                    <input type="hidden" id="id" name="id" value="<?php echo $cnote['id']?>">
                    <input type="text" id="nama" name="nama" value="<?php echo $cnote['nama']?>">
                </div>
                <div class="formi">
                    <label for="">Judul</label>
                    <input type="text" id="judul" name="judul" value="<?php echo $cnote['judul']?>">
                </div>
                <div class="formi">
                    <label for="">Content</label>
                    <textarea cols="20" rows="3" id="content" name="content" ><?php echo $cnote['content']?></textarea>
                    <!-- <input type="text" id="content" name="content" value="<php echo $cnote['content']?>"> -->
                </div>
                <div class="formi">
                    <label for="">Upload gambar</label>
                    <?php 
                    if($cnote['gambar'] == ''){
                        echo "Tidak ada gambar";
                        echo"<input type='file' name='gambar'>";
                    }
                    else { ?>                
                    <img src="<?php echo base_url();?>assets/uploads/<?php echo $cnote['gambar'];?>" width="99" alt="Ada gambar">
                    <input type="file" name="gambar" >
                    <?php } ?>
                </div>

                <div class="button">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('notee/nootes')?>" class="btn-success">Kembali</a></div></div>
            <?php echo form_close();?>

            <?php }?>
        </div>
    </section>
</div>
