<section id="contact">
    <div class="judul">
        <h1>Laporan</h1>
    </div>
    <p></p>
    <div class="isicontact">
    <div class="form">
        <form action="<?php echo base_url(). "notee/tambahcon"?>" method="post" autocomplete="off">
            <div class="bagian">
                <label for="">Nama</label>
                <input type="text" name="nama" placeholder="nama">
            </div>
            <div class="bagian">
                <label for="">Alamat Email</label>
                <input type="email" name="email" required placeholder="email">
            </div>
            <div class="bagian">
                <label for="">Permasalahan</label>
                <textarea name="saran" id="saran" required></textarea>
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
    <iframe src=""  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>
<style>
    .isicontact{
        display: flex;
    }
    .isicontact iframe{
        width: 600px;
        padding: 20px;
        margin: 20px;
    }
     #contact h1{
        text-align: left;
        padding: 20px;
     }
     form {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}
.bagian{
    padding: 5px;
    width: 100%;
}

/* Label styling */
.bagian label{
    font-weight: bold;
    display: block;
    font-size: 20px;
    margin-bottom: 5px;
    padding: 5px;
}

/* Input styling */
.bagian input, .bagian textarea {
    width: 95%;
    padding: 9.5px;
    padding-right: 1px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Tombol submit */
button{
    background-color: #28a745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

/* Efek hover pada tombol */
button:hover {
    background-color: #218838;
}

/* Tambahan efek transisi */
.bagian input, button {
    transition: 0.3s;
}


</style>