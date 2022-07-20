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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <title>KurniaKost</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-warning" href="#">KurniaKost</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#kategori">Kategori & Harga Kost</a>
        <a class="nav-item nav-link" href="#keunggulan">Keunggulan & Contact Information</a>
      </div>
    </div>
  </nav>

  <div class="sesi1 text-center">
    <!-- <p id="Type"></p> -->
    <p id="typed"></p>
    <script type="text/javascript">
      var i = 0;
      var text = "Sini Ngekost :3";
      function typing(){
        if(i < text.length){
          document.getElementById("typed").innerHTML += text.charAt(i);
          i++;
          setTimeout(typing,50);
        }
      }
      typing();
    </script>
    <a href="form.php"><button type="button" class="btn btn-outline-warning btn-lg" id="paddingbtn">Mauuuuuuu!</button></a>
    <!-- <a class="btn btn-outline-warning btn-lg" id="paddingbtn" href="#" role="button">Mauuuuuuu!</a> -->
    
  </div>

  <div class="listkost text-center mx-5" id="kategori">
    <h1 class="header-list text-warning">List Kategori Kamar Kost</h1>
    <div class="bbottom"></div>
    <div class="marg"></div>
    <div class="card-deck mx-5">
      <div class="card bg-warning border-0">
        <img src="Desain-Kamar-Kost-Serba-Putih.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kamar Gold</h5>
          <p class="card-text">Kamar ini cocok untuk kamu yang suka selonjoran dan muter-muter ga jelas waktu tidur. Kamu juga leluasa untuk jogging di kamar</p>
        </div>
        <div class="card-footer">
          <small class="text-light">Rp. 2.500.000/Bulan</small>
        </div>
      </div>
      <div class="card bg-secondary border-0">
        <img src="silver tier.png" class="card-img-top" id="kostsmall" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kamar Silver</h5>
          <p class="card-text">Kamar ini cocok untuk kamu yang selonjoran aja, tapi kalo mau lari-lari mending XL aja.</p>
        </div>
        <div class="card-footer">
          <small class="text-light">Rp. 1.500.000/Bulan</small>
        </div>
      </div>
      <div class="card border-0" id="bronze">
        <img src="Kost Small.jpeg" class="card-img-top" id="kostsmall" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kamar Tai</h5>
          <p class="card-text">Kamu ga pantes selonjoran.</p>
        </div>
        <div class="card-footer">
          <small class="text-light">Rp. 250.000/Bulan</small>
        </div>
      </div>
    </div>
  </div>

  <div class="keunggulan text-center"  id="keunggulan">
    <h1 class="header-list text-light" id="greyarea">Ngekost disini aja, Soalnya</h1>
    <div class="bbottom"></div>
    <div class="marg"></div>
    <div class="card-deck mx-5">
      <div class="card border-0 bg-warning">
        <h1 class="nomor">1</h1>
        <div class="card-body">
          <p class="card-text text-light">Pelayanan kami sangat friendly.....fire</p>
        </div>
      </div>
      <div class="card border-0 bg-warning">
        <h1 class="nomor">2</h1>
        <div class="card-body">
          <p class="card-text text-light">Gratis roasting dan memberikan sensasi jadi buronan tiap awal bulan</p>
        </div>
      </div>
      <div class="card border-0 bg-warning">
        <h1 class="nomor">3</h1>
        <div class="card-body">
          <p class="card-text text-light">Termurah dibanding kost lain. Ga pcy? BAKU HANTAM KYTA</p>
        </div>
      </div>
    </div>
    <a href="form.php"><button type="button" class="btn btn-outline-light btn-lg" id="paddingbtn">Jadi Pengen Ngekost :3!</button></a>
  </div>
  
  <div class="footer" id="footer">
    <h1 class="header-list text-warning">Contact Us</h1>
    <div class="bbottom"></div>
    <div class="marg"></div>
    <ul class="socmed">
      <li> <a href="https://www.instagram.com/_tirtanusa_/" target="_blank">Instagram</a></li>
      <li> <a href="https://www.facebook.com/TirtanusaKurnia/" target="_blank">Facebook</a></li>
      <li> <a href="https://github.com/tirtanusa" target="_blank">GitHub</a></li>
    </ul>
    <p class="text-warning" id="rights"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Created by Tirtanusa Kurnia Adhi Perdana</a></p>
  </div>


  
</body>
</html>