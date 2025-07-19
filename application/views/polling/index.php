<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Aplikasi Polling</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Aplikasi Pemilihan Ketua Bem</h1>
    <p class="lead">Soal Hackathon Nomor 5</p>
  </div>
</div>

<form class="user" method="post" action="<?= base_url('polling/add');?>">
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/polling/org1.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Budi</h5>
                <input type="radio" class="form-control" name="polling" value="Budi">
            </div>
            </div>
        </div>

        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/polling/org2.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bagus</h5>
                <input type="radio" class="form-control" name="polling" value="Bagus">
            </div>
            </div>
        </div>

        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/polling/org3.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rahmat</h5>
                <input type="radio" class="form-control" name="polling" value="Rahmat">
            </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">Pilih</button>

    </div>
</div>
</form>
<div class="jumbotron jumbotron-fluid mt-3">
  <div class="container">
    
    <p class="lead">Soal Hackathon Nomor 5</p>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>