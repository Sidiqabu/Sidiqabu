<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pasien</title>
  </head>
  <body>
    
  <div class="container mt-3"> 
    <h4>Berikut adalah data covid 19 tahun 2022 di berbagai wilayah</h4>
    <P>Pilih Wilayah :</P>
<div class="tabel">
    <select class="tabel" id="0" name="post">
  <option selected value="0">PILIH MENU</option>
  <option value="1">DKI JAKARTA</option>
  <option value="2">JAWA BARAT</option>
  <option value="3">BANTEN</option>
  <option value="5">JAWA TENGAH</option>
</select>
</div>
    <h5 class="text-center mt-5"> <?php
              // Prints the day, date, month, year, time, AM or PM
              echo date("l jS \of F Y h:i:s A ");
           ?>
        </h5>
    <h6 class="text-center">Abu Bakar Sidiq/17101140</h6>
      
    <table class="table table-dark table-striped mt-3" name="GET">
  <thead>
    <tr>
      <th scope="col">Positif</th>
      <th scope="col">Dirawat</th>
      <th scope="col">Sembuh</th>
      <th scope="col">Meninggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.245.653</th>
      <td>411</td>
      <td>1.227.793</td>
      <td>15.244</td>
    </tr>
</table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
