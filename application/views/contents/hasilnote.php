<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Note</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

</head>
<body>
<!-- <div class="appbarn">
    <h3 class='judul'>Berikut adalah hasil dari note yang ditulis di database</h3>
</div> -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal">
        Buka Modal Alert
    </button> -->
    <!-- <button onclick="showModal()" class="btn">Buka Modal</button> -->

    <!-- <div class="hasilnote"> -->
        <!-- print_r($note); -->
        <!-- php $no = 1; ?>
        php foreach($note as $isi):?> -->
    
            <div class="content">
                <h2 class="rand">Daftar Catatan</h2>
                <div class="posisi">
                    <div class="search">
                        
                        <?php echo form_open('notee/cari', ['method' => 'get']);?>
                        
                        <!-- <= isset($cari) ? $cari : ''?> -->
                        <input type="text" name="cari" placeholder="cari data" value="<?= $this->input->get('cari')?>">
                        <!-- <input type="submit" value="Cari" name=""> -->
                        <input type="submit" name="kirim" value="Cari" class="btn">
                        <!-- <button type="submit" name="kirim" class="btn-cari">Cari</button> -->
                        <?php echo form_close();?>
                    </div>
                    <a href="<?= base_url('notee/tambah');?> " class="btn-add">+ Tambah Data</a>
</div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Content</th>
                <th>Tanggal</th>
                <th colspan='5'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            
            if(empty($note)) {
                echo"<tr>
                <td class='text-center' colspan='6'>Data tidak ada</td>
                </tr>";
            }
            else{
            foreach ($note as $isi): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= ucwords($isi['nama'])?></td>
                    <td><?php echo strtoupper($isi['judul'])?></td>
                    <td><?= htmlspecialchars($isi['content']); ?></td>
                    <td><?= htmlspecialchars($isi['tanggal']); ?></td>
                    <td>
                        <!-- karena menggunakan array asosiatif jadi $isi['id'] -->
                        <?php echo anchor('notee/hapus/'.$isi['id'],'<div class="btn-hapus" >
                        <ion-icon name="trash-outline" ></ion-icon>
                        </div>', ['onclick' => "return confirm('Yakin mau dihapus?')"]
                        ) ?>
                      
                    </td>
                    <td>
                        <?php echo anchor('notee/edit/'. $isi['id'],' <div class="btn-edit">
                        <ion-icon name="create-outline"></ion-icon>
                        </div>');?>
                       
                    </td>
                    <td>
                        <?php echo anchor('notee/detail/'. $isi['id'],' 
                        <div class="btn-edit">
                            <ion-icon name="information-outline" onclick="showModal()" ></ion-icon>
                        </div>');?>
                        <!-- <ion-icon name="information-outline"></ion-icon> -->
                        
                    </td>
                   
                </tr>
                <?php endforeach; }?>
        </tbody>
    </table>
</div>

<!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
                // Fungsi untuk menampilkan modal
                function showModal() {
            const modal = document.getElementById('myModal');
            modal.style.display = 'block';
            modal.classList.add('show');
            
            // Tambahkan backdrop
            const backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop';
            document.body.appendChild(backdrop);
        }

        // Fungsi untuk menyembunyikan modal
        function hideModal() {
            const modal = document.getElementById('myModal');
            modal.style.display = 'none';
            modal.classList.remove('show');
            
            // Hapus backdrop
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
        }

        // Menangani klik di luar modal
        document.addEventListener('click', function(e) {
            const modal = document.getElementById('myModal');
            if (e.target === modal || e.target.classList.contains('modal-backdrop')) {
                hideModal();
            }
        });

        // Menangani tombol ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideModal();
            }
        });
    </script> -->

</body>
</html>


<style>
    .content .posisi{
        display: flex;
        justify-content: space-between

    }

    .content{
        margin: 10px;
    }
    .search {
        margin: 5px;
        padding-right: 15px;
    }
    .search input[type='submit']{
        cursor: pointer;
        
    }
    form{
        display: flex;
        flex-direction: row;
        width: 110px;
    }
    center{
        color: red;
    }

.rand{
    margin-left: 5px;
}
/* CSS Bootstrap Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
            max-width: 500px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            background-color: #fff3cd;
            border-radius: 4px;
            padding: 15px;
            color: #856404;
        }

        .modal-header {
            border-bottom: none;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .modal-title {
            margin: 0;
            color: #856404;
            font-weight: 600;
        }

        .close {
            color: #856404;
            font-size: 28px;
            font-weight: 700;
            line-height: 1;
            text-shadow: 0 1px 0 #fff;
            opacity: 0.5;
            transition: opacity 0.2s ease;
        }

        .close:hover {
            opacity: 0.8;
        }

        .close:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);
        }

        .modal-body {
            padding: 15px;
            background-color: #fff3cd;
            color: #856404;
        }

        .modal-footer {
            border-top: none;
            padding: 15px;
            justify-content: flex-end;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #856404;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: #fff3cd;
            border: 1px solid #856404;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 4px;
            transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
        }

        .btn:hover {
            background-color: #856404;
            color: #fff3cd;
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);
        }

        .fade {
            transition: opacity 0.15s linear;
        }

        .modal.show {
            display: block;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
  /* Styling untuk kontainer utama */
.con {
    margin: auto;
}
html 
        {
            scroll-behavior: smooth;
        }

/* Styling tabel */
.table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
    /* margin:1rem; */
    overflow: hidden;
}

/* Styling header tabel */
.table thead {
    background-color: #343a40;
    color: white;
    text-align: center;
}

/* Styling setiap sel dalam header */
.table th {
    padding: 12px;
    text-transform: uppercase;
    font-weight: bold;
}

/* Styling isi tabel */
.table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

/* Alternatif warna baris */
.table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Hover efek */
.table tbody tr:hover {
    background-color: #e9ecef;
}

/* Styling untuk nomor agar berada di tengah */
.table td:first-child {
    text-align: center;
    font-weight: bold;
}

/* Styling untuk judul agar lebih mencolok */
.table td:nth-child(3) {
    font-weight: bold;
    color: #007bff;
    font-size: 1rem;
}
.table td:nth-child(2){
    font-size: 1.2rem;
    font-weight: 600;
}
/* btn start */

.btn-hapus{
    /* color: red; */
    /* background-color: red; */
    border-radius: 5px;
    width: 15px;
    font-size: 25px;
}
.btn-edit{
    /* color: red; */
    /* background-color: red; */
    border-radius: 5px;
    width: 15px;
    font-size: 25px;
}
/* btn end */

/* Responsif untuk layar kecil */
@media (max-width: 600px) {
    .table th, .table td {
        padding: 8px;
        font-size: 14px;
    }
}

    </style>

    <!-- ?php echo anchor('notee/detail/'. $isi['id'],' <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    + Tambah Data</button>');?> -->




<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">em</button> -->
      <!-- </div>
    <div class="modal-body">
    isi...         
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
<!-- modal bootsrap end-->
