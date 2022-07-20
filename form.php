<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Gugi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="stylesheet" href="script.js">
    <title>KuniaKost</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <a class="navbar-brand text-warning" href="index.php">KurniaKost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- <form name="formulir" method="post" action="isian.php" class="justify-content-center">
        <label for="">Masukkan nama</label><br>
        <input type="text"><br>
        <label for="">Masukkan Email</label><br>
        <input type="text"><br>
        <label for="">Masukkan nomor telepon</label><br>
        <input type="number"><br>
    </form> -->

    <div class="container">
        <form class="form1" name="formpeminat" action="proses.php"  method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan nama</label>
              <input type="text" class="form-control text-warning" name="nama" id="inputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Umur</label>
                <input type="number" class="form-control text-warning" name="umur" id="inputUmur" placeholder="Masukkan Umur">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nomor Telepon Aktif</label>
              <input type="number" class="form-control text-warning" name="notelp" id="inoutTelepon" placeholder="Masukkan Nomor Telepon">
            </div>
            <button type="submit" class="btn btn-warning btn-block">Submit</button>
          </form>

          
    </div>

</body>
</html>