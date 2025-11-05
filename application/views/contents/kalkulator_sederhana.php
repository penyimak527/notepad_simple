<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <center class="bg-primary p-1"><h1 class="text-white">Kalkulator</h1></center>
    <div class="kembali d-row btn btn-info m-3">
      <ion-icon name="arrow-back-outline" class="fs-6"></ion-icon>
      <a href="<?= base_url('notee')?>" class="fs-5 text-decoration-none text-white">Kembali</a>

    </div>
    <center>
    <div class="card m-3 d-flex justify-content-center align-items-center" style="width: 22rem;">
      <h4 class="m-3">Kalkulator Sederhana</h4>
      <div class="card-body">
        <div class="form">
          <input type="text" class="form-control" placeholder="masukkan angka" id="tampilan">
        </div>
        <div class="button">
          <div class="angka">
            <button class="btn btn-secondary m-2" onclick="inputValue('1')">1</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('2')">2</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('3')">3</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('4')">4</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('5')">5</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('6')">6</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('7')">7</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('8')">8</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('9')">9</button>
            <button class="btn btn-secondary m-2" onclick="inputValue('0')">0</button>
          </div>
          <div class="aritmatika ">
            <button class="btn btn-primary m-2" onclick="operasiValue('+')">+</button>
            <button class="btn btn-primary m-2" onclick="operasiValue('-')">-</button>
            <button class="btn btn-primary m-2" onclick="operasiValue('*')">x</button>
            <button class="btn btn-primary m-2" onclick="operasiValue('/')">/</button>
            <button class="btn btn-primary m-2 " onclick="inputValue('.')">.</button>
          </div>
          <div class="d-flex ms-4">
          <button class="btn btn-danger m-2 hapus" onclick="hapustampilan()">Hapus</button>
          <button type="submit" class="btn btn-primary m-2" onclick="kalkulasi()" style="height: 2.5rem;">=</button></div>
        </div>
      </div>
    </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/script.js')?>"></script>
  </body>
</html>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>